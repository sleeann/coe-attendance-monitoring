<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesAndScoresController extends Controller
{
    public function index()
    {
        return view('administrator.grades_scores');
    }
}
