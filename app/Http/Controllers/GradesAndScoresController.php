<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GradesRequest;
use App\Models\Grades;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;
use PhpOffice\PhpSpreadsheet\IOFactory;

class GradesAndScoresController extends Controller
{
    public function index()
    {
        return view('parent.grades_scores');
    }
    public function list()
    {
        $all = Grades::all();
        return view('administrator.grades_scores', compact('all'));
    }

    public function display()
    {
        $student_grades = $temp_array = array();
        $grades = Grades::all();
        foreach($grades as $grade){
            $student = User::find($grade->student_id);
            $temp_array = $grade->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $student_grades[] = $temp_array;
        }
        return response()->json($student_grades);
    }

    public function save(GradesRequest $request)
    {
        $user = User::where('name', $request->student_name)->orWhere('email', $request->student_id)->first();
        
        if($user){
            $exist = Grades::where('student_id', $user->id)
                        ->where('semester', $request->semester)
                        ->where('term', $request->term)
                        ->get();
            if($exist->isEmpty()){
                Grades::create([
                    'student_id' => $user->id,
                    'semester' => $request->semester,
                    'date' => $request->date,
                    'term' => $request->term,
                    'grade' => $request->grade,
                    'remarks' => $request->remarks
                ]);
                return response()->json(['message' => 'Grades Added Successfully', 'success' => true]);
            }else{
                return response()->json(['message' => 'Grades for '.$user->email.' is already exist', 'success' => false]);
            }
        }else{
            return response()->json(['message' => 'No Student Found!', 'success' => false]);
        }
    }

    public function edit($id)
    {
        $student_grades = array();
        $grade = Grades::find($id);
        $student = User::find($grade->student_id);
        $student_grades = $grade->toArray();
        $student_grades['name'] = $student->name;
        $student_grades['student_id'] = $student->email;
        
        return response()->json($student_grades);
    }

    public function update(Request $request)
    {
        try{

            $request->validate([
                'student_id' => 'required',
                'term' => 'required',
                'semester' => 'required',
                'date' => 'required',
                'grade' => 'required',
                'remarks' => 'required',
                'id' => 'exists:grades,id', // Ensure the record being updated exists in the database
                'unique_key' => Rule::unique('grades')->ignore($request->id)->where(function ($query) use ($request) {
                    return $query->where('student_id', $request->student_id)
                        ->where('term', $request->term)
                        ->where('semester', $request->semester);
                }),
            ]);
            $users = User::where('name', $request->student_name)->orWhere('email', $request->student_id)->get();
            $user = $users->first();
    
            if($user){
                if(count($users->toArray()) > 1){
                    return response()->json(['message' => 'Student ID does not match to Student Name', 'success' => false]);
                }
                    $data = [
                        'student_id' => $user->id,
                        'semester' => $request->semester,
                        'date' => $request->date,
                        'term' => $request->term,
                        'grade' => $request->grade,
                        'remarks' => $request->remarks
                    ];
            
                    $grade = Grades::find($request->id);
                    $grade->student_id = $data['student_id'];
                    $grade->semester = $data['semester'];
                    $grade->date = $data['date'];
                    $grade->term = $data['term'];
                    $grade->grade = $data['grade'];
                    $grade->remarks = $data['remarks'];
                    $grade->save();
                    return response()->json(['message' => 'Grades Updated Successfully', 'success' => true]);
                
            }else{
                return response()->json(['message' => 'Student Not Found', 'success' => false]);
            }
        }catch(QueryException $error){
            if ($error->getCode() == 23000) {
                // Unique constraint violation
                return response()->json(['message' => 'Student Grade Already Exist for the selected term and semester', 'success' => false]);
            }
        
            // Handle other database-related exceptions if needed
            // You can also log the exception for further analysis
            return response()->json(['message' => 'Student Grade Already Exist for the selected term and semester', 'success' => false]);
        }
        
    }


    public function delete(Request $request)
    {
        $grade = Grades::find($request->id);
        $grade->delete();
        return response()->json(['message' => 'Grades Deleted Successfully', 'success' => true]);
    }

    private function store($data){
        $user = User::where('name', $data['student_name'])->first();
        
        if($user){
            $exist = Grades::where('student_id', $user->id)
                        ->where('semester', $data['semester'])
                        ->where('term', $data['term'])
                        ->get();
            if($exist->isEmpty()){
                Grades::create([
                    'student_id' => $user->id,
                    'semester' => $data['semester'],
                    'date' => $data['date'],
                    'term' => $data['term'],
                    'grade' => $data['grade'],
                    'remarks' => $data['remarks']
                ]);
            }
        }
    }

    public function upload(Request $request){
        if ($request->hasFile('upload_grade')) {
            $file = $request->file('upload_grade');
            $tmpFilePath = $file->getRealPath();
            $reader = IOFactory::createReaderForFile($tmpFilePath);

            try {
                $spreadsheet = $reader->load($tmpFilePath);
                $activeSheet = $spreadsheet->getActiveSheet();
                if($request->score_type == 'Grade'){
                    $row = 7;
                    $keys = ['Midterm' => 'X', 'Final' => 'AV'];
                    if($request->score_term == 'Midterm' || $request->score_term == 'Final'){
                        $key = $keys[$request->score_term];
                        $data = array();
                        while($activeSheet->getCell($key.$row)->getValue() != null){
                        // while($row == 7){
                            $fname = $activeSheet->getCell('C'.$row)->getValue();
                            $lname = $activeSheet->getCell('B'.$row)->getValue();
                            $name = $fname . ' ' . $lname;
                            $grade = $activeSheet->getCell($key.$row)->getCalculatedValue();
                            if($grade == '#VALUE!'){
                                $grade = 0;
                                $remarks = 'DROPPED';
                            }else if(gettype($grade) == 'string'){
                                $grade = '';
                            }else{
                                $grade = round($grade);
                            }

                            $data = ['student_name' => $name, 'grade' => $grade, 'term' => $request->score_term, 'semester' => $request->score_semester, 'date' => NOW(), 'remarks' => ''];
                            $this->store($data);
                            $row++;
                        }
                    }else{
                        $key = ['X', 'AV'];
                        $term = ['Midterm', 'Final'];
                        $data = array();
                        for($i=0; $i<2; $i++){
                            $row = 7;
                            while($activeSheet->getCell($key[$i].$row)->getValue() != null){
                                $fname = $activeSheet->getCell('C'.$row)->getValue();
                                $lname = $activeSheet->getCell('B'.$row)->getValue();
                                $name = $fname . ' ' . $lname;
                                $grade = $activeSheet->getCell($key[$i].$row)->getCalculatedValue();
                                if($grade == '#VALUE!'){
                                    $grade = 0;
                                    $remarks = 'DROPPED';
                                }else if(gettype($grade) == 'string'){
                                    $grade = '';
                                }else{
                                    $grade = round($grade);
                                }
    
                                $data = ['student_name' => $name, 'grade' => $grade, 'term' => $term[$i], 'semester' => $request->score_semester, 'date' => NOW(), 'remarks' => ''];
                                $this->store($data);
                                $row++;
                            }
                        }
                    }
                }else if($request->score_type == 'Exam'){
                    dd('Exam');
                }else if($request->score_type == 'Quiz'){
                    dd('Quiz');
                }else if($request->score_type == 'Assignment'){
                    dd('Assignment');
                }else if($request->score_type == 'Seatwork'){
                    dd('Seatwork');
                }else{
                    dd('All');
                }

                return response()->json(['message' => 'Student Grade Uploaded Successfully', 'success' => true]);
            } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Error reading the file: ' . $e->getMessage()]);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'File not provided.']);
        }
    }
}
