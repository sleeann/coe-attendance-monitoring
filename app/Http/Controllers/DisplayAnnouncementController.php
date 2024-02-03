<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Carbon\Carbon;

class DisplayAnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        $currentDate = Carbon::now();
        $allAnnouncement = [];

        foreach ($announcements as $announcement) {
            $announcementDate = Carbon::parse($announcement->date);

            if ($announcementDate->isFuture() || $announcementDate->isToday()) {
                $allAnnouncement[] = $announcement;
            }
        }
        return view('parent.display-announcement', compact('allAnnouncement'));
    }
}
