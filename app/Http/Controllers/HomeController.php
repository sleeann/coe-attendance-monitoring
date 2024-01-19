<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('administrator.home', compact('user'));
    }
}
