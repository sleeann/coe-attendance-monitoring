<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GradesRequest;
use App\Http\Requests\ExamRequest;
use App\Models\Grades;
use App\Models\Exams;
use App\Models\Quiz;
use App\Models\Seatwork;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Auth;

class GradesAndScoresController extends Controller
{
    public function index()
    {
        $student_grade = array();
        $user = Auth::user()->id;
        $grades = Grades::where('student_id', $user)->get();
        foreach($grades as $grade){
            $student_grade[$grade->semester][$grade->term] = $grade;
        }
        $exams = Exams::where('student_id', $user)->get();
        $quizzes = Quiz::where('student_id', $user)->get();
        $assignments = Assignment::where('student_id', $user)->get();
        $seatworks = Seatwork::where('student_id', $user)->get();

        return view('parent.grades_scores', compact('student_grade', 'exams', 'quizzes', 'assignments', 'seatworks'));
    }

    public function list()
    {
        $grades = $exams = $quizzes = $assignments = $seatworks = $temp_array = array();
        $student_grades = Grades::all();
        foreach($student_grades as $grade){
            $student = User::find($grade->student_id);
            $temp_array = $grade->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $grades[] = $temp_array;
        }

        //exams
        $student_exams = Exams::all();
        foreach($student_exams as $exam){
            $student = User::find($exam->student_id);
            $temp_array = $exam->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $exams[] = $temp_array;
        }

        //quizzes
        $student_quizzes = Quiz::all();
        foreach($student_quizzes as $quiz){
            $student = User::find($quiz->student_id);
            $temp_array = $quiz->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $quizzes[] = $temp_array;
        }

        //assignments
        $student_assignments = Assignment::all();
        foreach($student_assignments as $assignment){
            $student = User::find($assignment->student_id);
            $temp_array = $assignment->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $assignments[] = $temp_array;
        }
        //seatworks
        $student_seatworks = Seatwork::all();
        foreach($student_seatworks as $seatwork){
            $student = User::find($seatwork->student_id);
            $temp_array = $seatwork->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $seatworks[] = $temp_array;
        }
        // dd($exams);
        return view('administrator.grades_scores', compact('grades', 'exams', 'quizzes', 'assignments', 'seatworks'));
    }

    public function display_grades()
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
    
    public function display_exams()
    {
        $exams = $temp_array = array();
        $student_exams = Exams::all();
        foreach($student_exams as $exam){
            $student = User::find($exam->student_id);
            $temp_array = $exam->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $exams[] = $temp_array;
        }
        return response()->json($exams);
    }

    public function display_quizzes()
    {
        $quizzes = $temp_array = array();
        $student_quizzes = Quiz::all();
        foreach($student_quizzes as $quiz){
            $student = User::find($quiz->student_id);
            $temp_array = $quiz->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $quizzes[] = $temp_array;
        }
        return response()->json($quizzes);
    }

    public function display_assignments()
    {
        $assignments = $temp_array = array();
        $student_assignments = Assignment::all();
        foreach($student_assignments as $assignment){
            $student = User::find($assignment->student_id);
            $temp_array = $assignment->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $assignments[] = $temp_array;
        }
        return response()->json($assignments);
    }

    public function display_seatworks()
    {
        $seatworks = $temp_array = array();
        $student_seatworks = Seatwork::all();
        foreach($student_seatworks as $seatwork){
            $student = User::find($seatwork->student_id);
            $temp_array = $seatwork->toArray();
            $temp_array['name'] = $student->name;
            $temp_array['student_id'] = $student->email;
            $seatworks[] = $temp_array;
        }
        return response()->json($seatworks);
    }
    //Grades
    public function save_grade(GradesRequest $request)
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

    public function edit_grade($id)
    {
        $student_grades = array();
        $grade = Grades::find($id);
        $student = User::find($grade->student_id);
        $student_grades = $grade->toArray();
        $student_grades['name'] = $student->name;
        $student_grades['student_id'] = $student->email;
        
        return response()->json($student_grades);
    }

    public function update_grade(Request $request)
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

    public function delete_grade(Request $request)
    {
        $grade = Grades::find($request->id);
        $grade->delete();
        return response()->json(['message' => 'Grades Deleted Successfully', 'success' => true]);
    }
    //Exam
    public function save_exam(ExamRequest $request)
    {
        $user = User::where('name', $request->student_name)->orWhere('email', $request->student_id)->first();
        if($user){
            $exist = Exams::where('student_id', $user->id)
                        ->where('semester', $request->semester)
                        ->where('term', $request->term)
                        ->get();
            if($exist->isEmpty()){
                Exams::create([
                    'student_id' => $user->id,
                    'semester' => $request->semester,
                    'date' => $request->date,
                    'term' => $request->term,
                    'score' => $request->score,
                    'exam_item' => $request->item,
                    'score_in_percent' => ($request->score / $request->item) * 100,
                ]);
                return response()->json(['message' => 'Exam Score Added Successfully', 'success' => true]);
            }else{
                return response()->json(['message' => 'Exam Score for '.$user->email.' is already exist', 'success' => false]);
            }
        }else{
            return response()->json(['message' => 'No Student Found!', 'success' => false]);
        }
    }

    public function edit_exam($id)
    {
        $student_exams = array();
        $exam = Exams::find($id);
        $student = User::find($exam->student_id);
        $student_exams = $exam->toArray();
        $student_exams['name'] = $student->name;
        $student_exams['student_id'] = $student->email;
        
        return response()->json($student_exams);
    }

    public function update_exam(Request $request)
    {
        try{

            $request->validate([
                'student_id' => 'required',
                'term' => 'required',
                'semester' => 'required',
                'date' => 'required',
                'score' => 'required',
                'item' => 'required',
                'id' => 'exists:grades,id', // Ensure the record being updated exists in the database
                'unique_key' => Rule::unique('exams')->ignore($request->id)->where(function ($query) use ($request) {
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
                        'score' => $request->score,
                        'exam_item' => $request->item,
                        'score_in_percent' => ($request->score / $request->item) * 100
                    ];
            
                    $exam = Exams::find($request->id);
                    $exam->student_id = $data['student_id'];
                    $exam->semester = $data['semester'];
                    $exam->date = $data['date'];
                    $exam->term = $data['term'];
                    $exam->score = $data['score'];
                    $exam->exam_item = $data['exam_item'];
                    $exam->score_in_percent = $data['score_in_percent'];
                    $exam->save();
                    return response()->json(['message' => 'Exam Score Updated Successfully', 'success' => true]);
                
            }else{
                return response()->json(['message' => 'Student Not Found', 'success' => false]);
            }
        }catch(QueryException $error){
            if ($error->getCode() == 23000) {
                // Unique constraint violation
                return response()->json(['message' => 'Student Exam Already Exist for the selected term and semester', 'success' => false]);
            }
        
            // Handle other database-related exceptions if needed
            // You can also log the exception for further analysis
            return response()->json(['message' => 'Student Exam Already Exist for the selected term and semester', 'success' => false]);
        }
        
    }

    public function delete_exam(Request $request)
    {
        $exam = Exams::find($request->id);
        $exam->delete();
        return response()->json(['message' => 'Exams Deleted Successfully', 'success' => true]);
    }
    //Quiz
    public function save_quiz(QuizRequest $request)
    {
        $user = User::where('name', $request->student_name)->orWhere('email', $request->student_id)->first();
        if($user){
            $exist = Quiz::where('student_id', $user->id)
                        ->where('quiz_no', $request->quiz_no)
                        ->where('semester', $request->semester)
                        ->where('term', $request->term)
                        ->get();
            if($exist->isEmpty()){
                Quiz::create([
                    'student_id' => $user->id,
                    'semester' => $request->semester,
                    'quiz_no' => $request->quiz_no,
                    'date' => $request->date,
                    'term' => $request->term,
                    'score' => $request->score,
                    'quiz_item' => $request->item,
                    'score_in_percent' => ($request->score / $request->item) * 100,
                ]);
                return response()->json(['message' => 'Quiz Score Added Successfully', 'success' => true]);
            }else{
                return response()->json(['message' => 'Quiz Score for '.$user->email.' is already exist', 'success' => false]);
            }
        }else{
            return response()->json(['message' => 'No Student Found!', 'success' => false]);
        }
    }

    public function edit_quiz($id)
    {
        $student_quizzes = array();
        $quiz = Quiz::find($id);
        $student = User::find($quiz->student_id);
        $student_quizzes = $quiz->toArray();
        $student_quizzes['name'] = $student->name;
        $student_quizzes['student_id'] = $student->email;
        
        return response()->json($student_quizzes);
    }

    public function update_quiz(Request $request)
    {
        try{

            $request->validate([
                'student_id' => 'required',
                'term' => 'required',
                'semester' => 'required',
                'date' => 'required',
                'score' => 'required',
                'item' => 'required',
                'quiz_no' => 'required',
                'id' => 'exists:quiz,id', // Ensure the record being updated exists in the database
                'unique_key' => Rule::unique('quiz')->ignore($request->id)->where(function ($query) use ($request) {
                    return $query->where('student_id', $request->student_id)
                        ->where('quiz_no', $request->quiz_no)
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
                        'score' => $request->score,
                        'quiz_item' => $request->item,
                        'quiz_no' => $request->quiz_no,
                        'score_in_percent' => ($request->score / $request->item) * 100
                    ];
            
                    $quiz = Quiz::find($request->id);
                    $quiz->student_id = $data['student_id'];
                    $quiz->semester = $data['semester'];
                    $quiz->date = $data['date'];
                    $quiz->term = $data['term'];
                    $quiz->score = $data['score'];
                    $quiz->quiz_item = $data['quiz_item'];
                    $quiz->quiz_no = $data['quiz_no'];
                    $quiz->score_in_percent = $data['score_in_percent'];
                    $quiz->save();
                    return response()->json(['message' => 'Quiz Score Updated Successfully', 'success' => true]);
                
            }else{
                return response()->json(['message' => 'Student Not Found', 'success' => false]);
            }
        }catch(QueryException $error){
            if ($error->getCode() == 23000) {
                // Unique constraint violation
                return response()->json(['message' => 'Student Quiz Already Exist for the selected term and semester', 'success' => false]);
            }
        
            // Handle other database-related exceptions if needed
            // You can also log the exception for further analysis
            return response()->json(['message' => 'Student Quiz Already Exist for the selected term and semester', 'success' => false]);
        }
        
    }

    public function delete_quiz(Request $request)
    {
        $quiz = Quiz::find($request->id);
        $quiz->delete();
        return response()->json(['message' => 'Quiz Score Deleted Successfully', 'success' => true]);
    }
    //Assignment
    public function save_assignment(AssignmentRequest $request)
    {
        $user = User::where('name', $request->student_name)->orWhere('email', $request->student_id)->first();
        if($user){
            $exist = Assignment::where('student_id', $user->id)
                        ->where('assignment_no', $request->assignment_no)
                        ->where('semester', $request->semester)
                        ->where('term', $request->term)
                        ->get();
            if($exist->isEmpty()){
                Assignment::create([
                    'student_id' => $user->id,
                    'semester' => $request->semester,
                    'assignment_no' => $request->assignment_no,
                    'date' => $request->date,
                    'term' => $request->term,
                    'score' => $request->score,
                    'assignment_item' => $request->item,
                    'score_in_percent' => ($request->score / $request->item) * 100,
                ]);
                return response()->json(['message' => 'Assignment Score Added Successfully', 'success' => true]);
            }else{
                return response()->json(['message' => 'Assignment Score for '.$user->email.' is already exist', 'success' => false]);
            }
        }else{
            return response()->json(['message' => 'No Student Found!', 'success' => false]);
        }
    }

    public function edit_assignment($id)
    {
        $student_assignment = array();
        $assignment = Assignment::find($id);
        $student = User::find($assignment->student_id);
        $student_assignment = $assignment->toArray();
        $student_assignment['name'] = $student->name;
        $student_assignment['student_id'] = $student->email;
        
        return response()->json($student_assignment);
    }

    public function update_assignment(Request $request)
    {
        try{

            $request->validate([
                'student_id' => 'required',
                'term' => 'required',
                'semester' => 'required',
                'date' => 'required',
                'score' => 'required',
                'item' => 'required',
                'assignment_no' => 'required',
                'id' => 'exists:assignment,id', // Ensure the record being updated exists in the database
                'unique_key' => Rule::unique('assignment')->ignore($request->id)->where(function ($query) use ($request) {
                    return $query->where('student_id', $request->student_id)
                        ->where('assignment_no', $request->assignment_no)
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
                        'score' => $request->score,
                        'assignment_item' => $request->item,
                        'assignment_no' => $request->assignment_no,
                        'score_in_percent' => ($request->score / $request->item) * 100
                    ];
            
                    $assignment = assignment::find($request->id);
                    $assignment->student_id = $data['student_id'];
                    $assignment->semester = $data['semester'];
                    $assignment->date = $data['date'];
                    $assignment->term = $data['term'];
                    $assignment->score = $data['score'];
                    $assignment->assignment_item = $data['assignment_item'];
                    $assignment->assignment_no = $data['assignment_no'];
                    $assignment->score_in_percent = $data['score_in_percent'];
                    $assignment->save();
                    return response()->json(['message' => 'assignment Score Updated Successfully', 'success' => true]);
                
            }else{
                return response()->json(['message' => 'Student Not Found', 'success' => false]);
            }
        }catch(QueryException $error){
            if ($error->getCode() == 23000) {
                // Unique constraint violation
                return response()->json(['message' => 'Student Assignment score Already Exist for the selected term and semester', 'success' => false]);
            }
        
            // Handle other database-related exceptions if needed
            // You can also log the exception for further analysis
            return response()->json(['message' => 'Student Assignment score Already Exist for the selected term and semester', 'success' => false]);
        }
        
    }

    public function delete_assignment(Request $request)
    {
        $assignment = Assignment::find($request->id);
        $assignment->delete();
        return response()->json(['message' => 'Assignment Score Deleted Successfully', 'success' => true]);
    }

    //Seatwork
    public function save_seatwork(SeatworkRequest $request)
    {
        $user = User::where('name', $request->student_name)->orWhere('email', $request->student_id)->first();
        if($user){
            $exist = Seatwork::where('student_id', $user->id)
                        ->where('seatwork_no', $request->seatwork_no)
                        ->where('semester', $request->semester)
                        ->where('term', $request->term)
                        ->get();
            if($exist->isEmpty()){
                Seatwork::create([
                    'student_id' => $user->id,
                    'semester' => $request->semester,
                    'seatwork_no' => $request->seatwork_no,
                    'date' => $request->date,
                    'term' => $request->term,
                    'score' => $request->score,
                    'seatwork_item' => $request->item,
                    'score_in_percent' => ($request->score / $request->item) * 100,
                ]);
                return response()->json(['message' => 'Seatwork Score Added Successfully', 'success' => true]);
            }else{
                return response()->json(['message' => 'Seatwork Score for '.$user->email.' is already exist', 'success' => false]);
            }
        }else{
            return response()->json(['message' => 'No Student Found!', 'success' => false]);
        }
    }

    public function edit_seatwork($id)
    {
        $student_seatworks = array();
        $seatwork = Seatwork::find($id);
        $student = User::find($seatwork->student_id);
        $student_seatworks = $seatwork->toArray();
        $student_seatworks['name'] = $student->name;
        $student_seatworks['student_id'] = $student->email;
        
        return response()->json($student_seatworks);
    }

    public function update_seatwork(Request $request)
    {
        try{

            $request->validate([
                'student_id' => 'required',
                'term' => 'required',
                'semester' => 'required',
                'date' => 'required',
                'score' => 'required',
                'item' => 'required',
                'seatwork_no' => 'required',
                'id' => 'exists:seatwork,id', // Ensure the record being updated exists in the database
                'unique_key' => Rule::unique('seatwork')->ignore($request->id)->where(function ($query) use ($request) {
                    return $query->where('student_id', $request->student_id)
                        ->where('seatwork_no', $request->seatwork_no)
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
                        'score' => $request->score,
                        'seatwork_item' => $request->item,
                        'seatwork_no' => $request->seatwork_no,
                        'score_in_percent' => ($request->score / $request->item) * 100
                    ];
            
                    $seatwork = Seatwork::find($request->id);
                    $seatwork->student_id = $data['student_id'];
                    $seatwork->semester = $data['semester'];
                    $seatwork->date = $data['date'];
                    $seatwork->term = $data['term'];
                    $seatwork->score = $data['score'];
                    $seatwork->seatwork_item = $data['seatwork_item'];
                    $seatwork->seatwork_no = $data['seatwork_no'];
                    $seatwork->score_in_percent = $data['score_in_percent'];
                    $seatwork->save();
                    return response()->json(['message' => 'Seatwork Score Updated Successfully', 'success' => true]);
                
            }else{
                return response()->json(['message' => 'Student Not Found', 'success' => false]);
            }
        }catch(QueryException $error){
            if ($error->getCode() == 23000) {
                // Unique constraint violation
                return response()->json(['message' => 'Student Seatwork Already Exist for the selected term and semester', 'success' => false]);
            }
        
            // Handle other database-related exceptions if needed
            // You can also log the exception for further analysis
            return response()->json(['message' => 'Student Seatwork Already Exist for the selected term and semester', 'success' => false]);
        }
        
    }

    public function delete_seatwork(Request $request)
    {
        $seatwork = Seatwork::find($request->id);
        $seatwork->delete();
        return response()->json(['message' => 'Seatwork Score Deleted Successfully', 'success' => true]);
    }


    //store
    private function storeGrade($data){
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

    private function storeExam($data){
        $user = User::where('name', $data['student_name'])->first();
        
        if($user){
            $exist = Exams::where('student_id', $user->id)
                        ->where('semester', $data['semester'])
                        ->where('term', $data['term'])
                        ->get();
            if($exist->isEmpty()){
                Exams::create([
                    'student_id' => $user->id,
                    'semester' => $data['semester'],
                    'date' => $data['date'],
                    'term' => $data['term'],
                    'score' => $data['exam'],
                    'exam_item' => $data['exam_item'],
                    'score_in_percent' => $data['score_in_percent']
                ]);
            }
        }
    }

    private function storeQuiz($data){
        $user = User::where('name', $data['student_name'])->first();
        
        if($user){
            $exist = Quiz::where('student_id', $user->id)
                        ->where('quiz_no', $data['quiz_no'])
                        ->where('semester', $data['semester'])
                        ->where('term', $data['term'])
                        ->get();
            if($exist->isEmpty()){
                Quiz::create([
                    'student_id' => $user->id,
                    'semester' => $data['semester'],
                    'date' => $data['date'],
                    'term' => $data['term'],
                    'score' => $data['score'],
                    'quiz_no' => $data['quiz_no'],
                    'score_in_percent' => $data['score_in_percent'],
                    'quiz_item' => $data['quiz_item']
                ]);
            }
        }
    }

    private function storeAssignment($data){
        $user = User::where('name', $data['student_name'])->first();
        
        if($user){
            $exist = Assignment::where('student_id', $user->id)
                        ->where('assignment_no', $data['assignment_no'])
                        ->where('semester', $data['semester'])
                        ->where('term', $data['term'])
                        ->get();
            if($exist->isEmpty()){
                Assignment::create([
                    'student_id' => $user->id,
                    'semester' => $data['semester'],
                    'date' => $data['date'],
                    'term' => $data['term'],
                    'score' => $data['score'],
                    'assignment_no' => $data['assignment_no'],
                    'score_in_percent' => $data['score_in_percent'],
                    'assignment_item' => $data['assignment_item']
                ]);
            }
        }
    }

    private function storeSeatwork($data){
        $user = User::where('name', $data['student_name'])->first();
        
        if($user){
            $exist = Seatwork::where('student_id', $user->id)
                        ->where('seatwork_no', $data['seatwork_no'])
                        ->where('semester', $data['semester'])
                        ->where('term', $data['term'])
                        ->get();
            if($exist->isEmpty()){
                Seatwork::create([
                    'student_id' => $user->id,
                    'semester' => $data['semester'],
                    'date' => $data['date'],
                    'term' => $data['term'],
                    'score' => $data['score'],
                    'seatwork_no' => $data['seatwork_no'],
                    'score_in_percent' => $data['score_in_percent'],
                    'seatwork_item' => $data['seatwork_item']
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
                $lastRow = $activeSheet->getHighestRow();
                for ($row = $lastRow; $row >= 1; $row--) {
                    $cellValue = $activeSheet->getCell('D' . $row)->getValue();
                
                    if (!empty($cellValue)) {
                        $lastRow = $row;
                        break;  // Exit the loop when the last non-empty cell is found
                    }
                }
                if($request->score_type == 'Grade'){
                    $this->addGrade($request, $lastRow, $activeSheet);
                }else if($request->score_type == 'Exam'){
                    $this->addExam($request, $lastRow, $activeSheet);
                }else if($request->score_type == 'Quiz'){
                    $this->addQuiz($request, $lastRow, $activeSheet);
                }else if($request->score_type == 'Assignment'){
                    $this->addAssignment($request, $lastRow, $activeSheet);
                }else if($request->score_type == 'Seatwork'){
                    $this->addSeatwork($request, $lastRow, $activeSheet);
                }else{
                    $this->uploadAll($request, $lastRow, $activeSheet);
                }

                return response()->json(['message' => 'Student Score/s Uploaded Successfully', 'success' => true]);
            } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Error reading the file: ' . $e->getMessage()]);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'File not provided.']);
        }
    }

    private function uploadAll($request, $lastRow, $activeSheet){
        $this->addGrade($request, $lastRow, $activeSheet);
        $this->addExam($request, $lastRow, $activeSheet);
        $this->addQuiz($request, $lastRow, $activeSheet);
        $this->addAssignment($request, $lastRow, $activeSheet);
        $this->addSeatwork($request, $lastRow, $activeSheet);
    }

    private function addGrade($request, $lastRow, $activeSheet){
        $data = array();
        $row = 7;
        $keys = ['Midterm' => 'X', 'Final' => 'AV'];
        $cells = ['Midterm' => 'MG', 'Final' => 'ADJFG'];
        if($request->score_term == 'Midterm' || $request->score_term == 'Final'){
            $key = $keys[$request->score_term];
            while($activeSheet->getCell($key.'6')->getValue() != null){
                if($activeSheet->getCell($key.'6')->getValue() == $cells[$request->score_term]){
                    break;
                }
                $key++;
            }
            while($activeSheet->getCell('A'.$row)->getValue() != null){
                $fname = $activeSheet->getCell('C'.$row)->getValue();
                $lname = $activeSheet->getCell('B'.$row)->getValue();
                $name = $fname . ' ' . $lname;
                $grade = $activeSheet->getCell($key.$row)->getCalculatedValue();
                if(gettype($grade) == 'string'){
                    if($grade == '#VALUE!'){
                        $grade = null;
                        $remarks = 'DROPPED';
                    }else{
                        $grade = null;
                    }
                }else if(gettype($grade) == 'double' || gettype($grade) == 'integer'){
                    $grade = round($grade);
                }else{
                    $grade = null;
                }

                $data = ['student_name' => $name, 'grade' => $grade, 'term' => $request->score_term, 'semester' => $request->score_semester, 'date' => NOW(), 'remarks' => ''];
                $this->storeGrade($data);
                $row++;
            }
        }else{
            $key = ['X', 'AV'];
            $term = ['Midterm', 'Final'];
            $cells = ['MG', 'ADJFG'];
            $data = array();
            
            for($i=0; $i<2; $i++){
                $row = 7;
                $_key = $key[$i];
                while($activeSheet->getCell($_key.'6')->getValue() != null){
                    if($activeSheet->getCell($_key.'6')->getValue() == $cells[$i]){
                        break;
                    }
                    $_key++;
                } 
                while($activeSheet->getCell('A'.$row)->getValue() != null){
                    $fname = $activeSheet->getCell('C'.$row)->getValue();
                    $lname = $activeSheet->getCell('B'.$row)->getValue();
                    $name = $fname . ' ' . $lname;
                    $grade = $activeSheet->getCell($_key.$row)->getCalculatedValue();
                    if(gettype($grade) == 'string'){
                        if($grade == '#VALUE!'){
                            $grade = null;
                            $remarks = 'DROPPED';
                        }else{
                            $grade = null;
                        }
                    }else if(gettype($grade) == 'double' || gettype($grade) == 'integer'){
                        $grade = round($grade);
                    }else{
                        $grade = null;
                    }

                    $data = ['student_name' => $name, 'grade' => $grade, 'term' => $term[$i], 'semester' => $request->score_semester, 'date' => NOW(), 'remarks' => ''];
                    $this->storeGrade($data);
                    $row++;
                }
            }
        }
    }

    private function addExam($request, $lastRow, $activeSheet){
        $row = 7;
        $keys = ['Midterm' => 'V', 'Final' => 'AR'];
        $cells = ['Midterm' => 'ME', 'Final' => 'FE'];
        if($request->score_term == 'Midterm' || $request->score_term == 'Final'){
            $key = $keys[$request->score_term];
            $data = array();
            while($activeSheet->getCell($key.'6')->getValue() != null){
                if($activeSheet->getCell($key.'6')->getValue() == $cells[$request->score_term]){
                    break;
                }
                $key++;
            }
            $no_of_item = $activeSheet->getCell($key.$lastRow)->getCalculatedValue();
            while($activeSheet->getCell('A'.$row)->getValue() != null){
                $score_percent = '';
                $fname = $activeSheet->getCell('C'.$row)->getValue();
                $lname = $activeSheet->getCell('B'.$row)->getValue();
                $name = $fname . ' ' . $lname;
                $exam = $activeSheet->getCell($key.$row)->getCalculatedValue();
                if(gettype($exam) == 'string'){
                    if($exam == '#VALUE!'){
                        $exam = null;
                        $remarks = 'DROPPED';
                    }else{
                        $exam = null;
                    }
                }else if(gettype($exam) == 'double' || gettype($exam) == 'integer'){
                    $exam = round($exam);
                    $score_percent = ($exam / $no_of_item) * 100;
                }else{
                    $exam = null;
                }
                $data = ['student_name' => $name, 'exam' => $exam, 'term' => $request->score_term, 'semester' => $request->score_semester, 'date' => NOW(), 'exam_item' => $no_of_item, 'score_in_percent' => $score_percent];
                $this->storeExam($data);
                $row++;
            }
        }else{
            $key = ['V', 'AR'];
            $term = ['Midterm', 'Final'];
            $cells = ['ME', 'FE'];
            $data = array();
            for($i=0; $i<2; $i++){
                $row = 7;
                $_key = $key[$i];
                while($activeSheet->getCell($_key.'6')->getValue() != null){
                    if($activeSheet->getCell($_key.'6')->getValue() == $cells[$i]){
                        break;
                    }
                    $_key++;
                }
                $no_of_item = $activeSheet->getCell($_key.$lastRow)->getCalculatedValue();
                while($activeSheet->getCell('A'.$row)->getValue() != null){
                    $score_percent = '';
                    $fname = $activeSheet->getCell('C'.$row)->getValue();
                    $lname = $activeSheet->getCell('B'.$row)->getValue();
                    $name = $fname . ' ' . $lname;
                    $exam = $activeSheet->getCell($_key.$row)->getCalculatedValue();
                    if(gettype($exam) == 'string'){
                        if($exam == '#VALUE!'){
                            $exam = null;
                            $remarks = 'DROPPED';
                        }else{
                            $exam = null;
                        }
                    }else if(gettype($exam) == 'double' || gettype($exam) == 'integer'){
                        $exam = round($exam);
                        $score_percent = ($exam / $no_of_item) * 100;
                    }else{
                        $exam = null;
                    }

                    $data = ['student_name' => $name, 'exam' => $exam, 'term' => $term[$i], 'semester' => $request->score_semester, 'date' => NOW(), 'exam_item' => $no_of_item, 'score_in_percent' => $score_percent];
                    $this->storeExam($data);
                    $row++;
                }
            }
        }
    }

    private function addQuiz($request, $lastRow, $activeSheet){
        $row = 7;
        $keys = ['Midterm' => 'D', 'Final' => 'Y'];
        if($request->score_term == 'Midterm' || $request->score_term == 'Final'){
            $data = array();
            $key = $keys[$request->score_term];
            while($activeSheet->getCell($key.'6')->getValue() != null){
                if($activeSheet->getCell($key.'6')->getValue() == 'Q1'){
                    break;
                }
                $key++;
            }
            while($activeSheet->getCell('A'.$row)->getValue() != null){
                $col = $key;
                $score_percent = '';
                $fname = $activeSheet->getCell('C'.$row)->getValue();
                $lname = $activeSheet->getCell('B'.$row)->getValue();
                $name = $fname . ' ' . $lname;
                while($activeSheet->getCell($col.'6')->getValue() != 'QG'){
                    if(stristr($activeSheet->getCell($col.'6')->getValue(), 'Q') !== false){
                        $no_of_item = $activeSheet->getCell($col.$lastRow)->getValue();
                        $quiz = $activeSheet->getCell($col.$row)->getCalculatedValue();
                        if(gettype($quiz) == 'string'){
                            if($quiz == '#VALUE!'){
                                $quiz = null;
                            }else{
                                $quiz = null;
                            }
                        }else if(gettype($quiz) == 'double' || gettype($quiz) == 'integer'){
                            $quiz = round($quiz);
                            $score_percent = ($quiz / $no_of_item) * 100;
                        }else{
                            $quiz = null;
                        }
                        $quiz_no = $activeSheet->getCell($col.'6')->getValue();
                        $quiz_no = substr($quiz_no, 1);
                        $data = ['student_name' => $name, 'score' => $quiz, 'quiz_no' => $quiz_no, 'term' => $request->score_term, 'semester' => $request->score_semester, 'date' => NOW(), 'quiz_item' => $no_of_item, 'score_in_percent' => $score_percent];
                        $this->storeQuiz($data);
                    }
                    $col++;
                }
                $row++;
            }
        }else{
            $keys = ['D', 'Y'];
            $term = ['Midterm', 'Final'];
            $data = array();
            for($i=0; $i<2; $i++){
                $row = 7;
                $key = $keys[$i];
                while($activeSheet->getCell($key.'6')->getValue() != null){
                    if($activeSheet->getCell($key.'6')->getValue() == 'Q1'){
                        break;
                    }
                    $key++;
                }
                while($activeSheet->getCell('A'.$row)->getValue() != null){
                    $col = $key;
                    $score_percent = '';
                    $fname = $activeSheet->getCell('C'.$row)->getValue();
                    $lname = $activeSheet->getCell('B'.$row)->getValue();
                    $name = $fname . ' ' . $lname;
                    $no_of_item = $activeSheet->getCell($col.$lastRow)->getValue();
                    while($activeSheet->getCell($col.'6')->getValue() != 'QG'){
                        $quiz = $activeSheet->getCell($col.$row)->getCalculatedValue();
                        if(gettype($quiz) == 'string'){
                            if($quiz == '#VALUE!'){
                                $quiz = null;
                            }else{
                                $quiz = null;
                            }
                        }else if(gettype($quiz) == 'double' || gettype($quiz) == 'integer'){
                            $quiz = round($quiz);
                            $score_percent = ($quiz / $no_of_item) * 100;
                        }else{
                            $quiz = null;
                        }
                        $quiz_no = $activeSheet->getCell($col.'6')->getValue();
                        $quiz_no = substr($quiz_no, 1);
                        $data = ['student_name' => $name, 'score' => $quiz, 'quiz_no' => $quiz_no, 'term' => $term[$i], 'semester' => $request->score_semester, 'date' => NOW(), 'quiz_item' => $no_of_item, 'score_in_percent' => $score_percent];
                        $this->storeQuiz($data);
                        $col++;
                    }
                    $row++;
                }
            }
        }
    }

    private function addAssignment($request, $lastRow, $activeSheet){
        $row = 7;
        $keys = ['Midterm' => 'G', 'Final' => 'AB'];
        if($request->score_term == 'Midterm' || $request->score_term == 'Final'){
            $data = array();
            while($activeSheet->getCell('A'.$row)->getValue() != null){
                $score_percent = '';
                $fname = $activeSheet->getCell('C'.$row)->getValue();
                $lname = $activeSheet->getCell('B'.$row)->getValue();
                $name = $fname . ' ' . $lname;
                $col = $keys[$request->score_term];
                while($activeSheet->getCell($col.'6')->getValue() != 'ASG'){
                    if(stristr($activeSheet->getCell($col.'6')->getValue(), 'AS') !== false){
                        $no_of_item = $activeSheet->getCell($col.$lastRow)->getValue();
                        $assignment = $activeSheet->getCell($col.$row)->getCalculatedValue();
                        if(gettype($assignment) == 'string'){
                            if($assignment == '#VALUE!'){
                                $assignment = null;
                            }else{
                                $assignment = null;
                            }
                        }else if(gettype($assignment) == 'double' || gettype($assignment) == 'integer'){
                            $assignment = round($assignment);
                            $score_percent = ($assignment / $no_of_item) * 100;
                        }else{
                            $assignment = null;
                        }
                        $assignment_no = $activeSheet->getCell($col.'6')->getValue();
                        $assignment_no = substr($assignment_no, 2);
                        $data = ['student_name' => $name, 'score' => $assignment, 'assignment_no' => $assignment_no, 'term' => $request->score_term, 'semester' => $request->score_semester, 'date' => NOW(), 'assignment_item' => $no_of_item, 'score_in_percent' => $score_percent];
                        
                        $this->storeAssignment($data);
                    }
                    $col++;
                }
                $row++;
            }
        }else{
            $key = ['G', 'AB'];
            $term = ['Midterm', 'Final'];
            $data = array();
            for($i=0; $i<2; $i++){
                $row = 7;
                while($activeSheet->getCell('A'.$row)->getValue() != null){
                    $score_percent = '';
                    $fname = $activeSheet->getCell('C'.$row)->getValue();
                    $lname = $activeSheet->getCell('B'.$row)->getValue();
                    $name = $fname . ' ' . $lname;
                    $col = $key[$i];
                    while($activeSheet->getCell($col.'6')->getValue() != 'ASG'){
                        if(stristr($activeSheet->getCell($col.'6')->getValue(), 'AS') !== false){
                            $no_of_item = $activeSheet->getCell($col.$lastRow)->getValue();
                            $assignment = $activeSheet->getCell($col.$row)->getCalculatedValue();
                            if(gettype($assignment) == 'string'){
                                if($assignment == '#VALUE!'){
                                    $assignment = null;
                                }else{
                                    $assignment = null;
                                }
                            }else if(gettype($assignment) == 'double' || gettype($assignment) == 'integer'){
                                $assignment = round($assignment);
                                $score_percent = ($assignment / $no_of_item) * 100;
                            }else{
                                $assignment = null;
                            }
                            $assignment_no = $activeSheet->getCell($col.'6')->getValue();
                            $assignment_no = substr($assignment_no, 2);
                            $data = ['student_name' => $name, 'score' => $assignment, 'assignment_no' => $assignment_no, 'term' => $term[$i], 'semester' => $request->score_semester, 'date' => NOW(), 'assignment_item' => $no_of_item, 'score_in_percent' => $score_percent];
                            $this->storeAssignment($data);
                        }
                        $col++;
                    }
                    $row++;
                }
            }
        }
    }

    private function addSeatwork($request, $lastRow, $activeSheet){
        $row = 7;
        $keys = ['Midterm' => 'O', 'Final' => 'AG'];
        if($request->score_term == 'Midterm' || $request->score_term == 'Final'){
            $data = array();
            while($activeSheet->getCell('A'.$row)->getValue() != null){
                $score_percent = '';
                $fname = $activeSheet->getCell('C'.$row)->getValue();
                $lname = $activeSheet->getCell('B'.$row)->getValue();
                $name = $fname . ' ' . $lname;
                $col = $keys[$request->score_term];
                while($activeSheet->getCell($col.'6')->getValue() != 'SWG'){
                    if(stristr($activeSheet->getCell($col.'6')->getValue(), 'SW') !== false){
                        $no_of_item = $activeSheet->getCell($col.$lastRow)->getValue();
                        $seatwork = $activeSheet->getCell($col.$row)->getCalculatedValue();
                        if(gettype($seatwork) == 'string'){
                            if($seatwork == '#VALUE!'){
                                $seatwork = null;
                            }else{
                                $seatwork = null;
                            }
                        }else if(gettype($seatwork) == 'double' || gettype($seatwork) == 'integer'){
                            $seatwork = round($seatwork);
                            $score_percent = ($seatwork / $no_of_item) * 100;
                        }else{
                            $seatwork = null;
                        }
                        $seatwork_no = $activeSheet->getCell($col.'6')->getValue();
                        if(stristr($seatwork_no, 'OSW') !== false){
                            $seatwork_no = 'Online Seatwork ' . substr($seatwork_no, 3);
                        }else{
                            $seatwork_no = 'Seatwork ' . substr($seatwork_no, 2);
                        }
                        $data = ['student_name' => $name, 'score' => $seatwork, 'seatwork_no' => $seatwork_no, 'term' => $request->score_term, 'semester' => $request->score_semester, 'date' => NOW(), 'seatwork_item' => $no_of_item, 'score_in_percent' => $score_percent];
                        $this->storeSeatwork($data);
                    }
                    $col++;
                }
                $row++;
            }
        }else{
            $key = ['G', 'AB'];
            $term = ['Midterm', 'Final'];
            $data = array();
            for($i=0; $i<2; $i++){
                $row = 7;
                while($activeSheet->getCell('A'.$row)->getValue() != null){
                    $score_percent = '';
                    $fname = $activeSheet->getCell('C'.$row)->getValue();
                    $lname = $activeSheet->getCell('B'.$row)->getValue();
                    $name = $fname . ' ' . $lname;
                    $col = $key[$i];
                    while($activeSheet->getCell($col.'6')->getValue() != 'ASG'){
                        if(stristr($activeSheet->getCell($col.'6')->getValue(), 'AS') !== false){
                            $no_of_item = $activeSheet->getCell($col.$lastRow)->getValue();
                            $seatwork = $activeSheet->getCell($col.$row)->getCalculatedValue();
                            if(gettype($seatwork) == 'string'){
                                if($seatwork == '#VALUE!'){
                                    $seatwork = null;
                                }else{
                                    $seatwork = null;
                                }
                            }else if(gettype($seatwork) == 'double' || gettype($seatwork) == 'integer'){
                                $seatwork = round($seatwork);
                                $score_percent = ($seatwork / $no_of_item) * 100;
                            }else{
                                $seatwork = null;
                            }
                            $seatwork_no = $activeSheet->getCell($col.'6')->getValue();
                            if(stristr($seatwork_no, 'OSW') !== false){
                                $seatwork_no = 'Online Seatwork ' . substr($seatwork_no, 3);
                            }else{
                                $seatwork_no = 'Seatwork ' . substr($seatwork_no, 2);
                            }
                            $data = ['student_name' => $name, 'score' => $seatwork, 'seatwork_no' => $seatwork_no, 'term' => $term[$i], 'semester' => $request->score_semester, 'date' => NOW(), 'seatwork_item' => $no_of_item, 'score_in_percent' => $score_percent];
                            $this->storeSeatwork($data);
                        }
                        $col++;
                    }
                    $row++;
                }
            }
        }
    }

}
