<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesAndScoresController extends Controller
{
    public function index()
    {
        return view('parent.grades_scores');
    }
    public function list()
    {
        return view('administrator.grades_scores');
    }
}
