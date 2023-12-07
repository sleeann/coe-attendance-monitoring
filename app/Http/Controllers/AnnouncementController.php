<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementController extends Controller
{
    public function index()
    {
        return view('administrator.announcement');
    }

    public function display()
    {
        $announcement = Announcement::all();
        return response()->json($announcement);
    }

    public function save(AnnouncementRequest $request)
    {
        Announcement::create([
            'announcement' => $request->announcement,
            'date' => $request->date
        ]);
        return response()->json(['message' => 'Announcement Added Successfully', 'success' => true]);
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return response()->json($announcement);
    }

    public function update(AnnouncementRequest $request)
    {
        Announcement::whereid($request->id)->update([
            'announcement' => $request->announcement,
            'date' => $request->date
        ]);
        return response()->json(['message' => 'Announcement Updated Successfully', 'success' => true]);
    }

    public function delete(Request $request)
    {
        Announcement::whereid($request->id)->delete();
        return response()->json(['message' => 'Announcement Deleted Successfully', 'success' => true]);
    }
}
