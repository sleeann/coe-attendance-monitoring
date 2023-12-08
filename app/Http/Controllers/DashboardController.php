<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function index()
    {
        return view('administrator.dashboard');
    }


    public function display()
    {
        $announcement = Announcement::select('date', 'time')->first();

        // Convert date and time columns to Carbon objects separately
        $formattedDate = Carbon::createFromFormat('Y-m-d', $announcement['date']);
        $formattedTime = Carbon::createFromFormat('H:i', $announcement->time)->format('g:i A');
        // Combine date and time to create a single Carbon datetime object
        $formattedDateTime = $formattedDate->setTimeFromTimeString($formattedTime);
        $currentDateTime = Carbon::now();

        if ($formattedDateTime->isPast()) {
            echo $formattedDateTime;
        } else {
            echo $formattedDateTime;
        }
    }



// 2017-11-01 16:29:27




}
