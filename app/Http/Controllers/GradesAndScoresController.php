<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GradesRequest;
use App\Models\Grades;
use App\Models\User;

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
        $grades = Grades::all();
        return response()->json($grades);
    }

    public function save(GradesRequest $request)
    {
        $user = User::where('email', $request->student_id)->first();
        if($user){
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
            return back()->withInput();
        }
        
    }

    public function edit($id)
    {
        $grades = Grades::find($id);
        return response()->json($grade);
    }

    public function update(Request $request)
    {

        $data = [
            'student_id' => $request->student_id,
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
    }


    public function delete(Request $request)
    {
        $grade = Grades::find($request->id);
        $grade->delete();
        return response()->json(['message' => 'Grades Deleted Successfully', 'success' => true]);
    }
}
