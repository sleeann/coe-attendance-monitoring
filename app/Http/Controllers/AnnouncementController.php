<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Http\Requests\AnnouncementRequest;
use Storage;

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

    public function uploadImage($request, $fieldName, $storagePath)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '_' . $image->getClientOriginalName();
            Storage::putFileAs($storagePath, $image, $imageName);
            return $imageName;
        }
        return null;
    }

    public function save(AnnouncementRequest $request)
    {
        $imageName = $this->uploadImage($request, 'image', 'public/gallery');
        Announcement::create([
            'title' => $request->title,
            'announcement' => $request->announcement,
            'date' => $request->date,
            'image' => $imageName
        ]);
        return response()->json(['message' => 'Announcement Added Successfully', 'success' => true]);
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return response()->json($announcement);
    }

    public function update(Request $request)
    {
        $imageName = $this->uploadImage($request, 'image', 'public/gallery');

        $data = [
            'title' => $request->title,
            'announcement' => $request->announcement,
            'date' => $request->date,
            'image' => $imageName
        ];

        $announcement = Announcement::find($request->id);
        if ($imageName && $announcement->image) {
            Storage::delete('public/gallery/' . $announcement->image);
            $announcement->image = $imageName;
        }

        $announcement->title = $data['title'];
        $announcement->announcement = $data['announcement'];
        $announcement->date = $data['date'];
        $announcement->save();
        return response()->json(['message' => 'Announcement Updated Successfully', 'success' => true]);
    }


    public function delete(Request $request)
    {
         $announcement = Announcement::find($request->id);
        if ($announcement->image) {
            Storage::delete('public/gallery/' . $announcement->image);
        }
        $announcement->delete();
        return response()->json(['message' => 'Announcement Deleted Successfully', 'success' => true]);
    }
}
