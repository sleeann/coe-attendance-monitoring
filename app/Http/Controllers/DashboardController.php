<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Carbon\Carbon;
use App\Models\User;
use Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $announcements = Announcement::all();
        $currentDate = Carbon::now();
        $allAnnouncement = [];

        foreach ($announcements as $announcement) {
            $announcementDate = Carbon::parse($announcement->date);

            if ($announcementDate->isFuture() || $announcementDate->isToday()) {
                $allAnnouncement[] = $announcement;
            }
        }
        return view('administrator.dashboard', compact('user', 'allAnnouncement'));
    }


}
