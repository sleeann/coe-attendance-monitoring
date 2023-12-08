<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function home(){
        return view('parent.home');
    }
    public function announcements(){
        return view('parent.announcements');
    }
    public function attendance(){
        return view('parent.attendance');
    }
    public function grades_score(){
        return view('parent.grades_score');
    }
    
}
