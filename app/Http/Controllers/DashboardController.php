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
        $admin = 0;
        $parent = 0;
        $instructor = 0;
        $users = User::with('roles')->get();
        foreach($users as $account){
            $user_roles = $account->roles;
            $user_roles->first()->name == 'Administrator' ? $admin++ : ($user_roles->first()->name == 'Instructor' ? $instructor++ : $parent++);
        }
        return view('administrator.dashboard', compact('user', 'allAnnouncement', 'admin', 'parent', 'instructor'));
    }


}
