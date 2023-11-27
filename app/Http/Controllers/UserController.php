<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function index()
    {
        return view('administrator.dashboard');
    }

    public function display()
    {
        $user = User::with('roles')->get();
        return response()->json($user);
    }

    public function save(UserRequest $request)
    {
        $user = User::create([
            'name' => Str::upper($request->fname.' '.$request->lname),
            'email' => $request->id,
            'password' => Hash::make($request->password)
        ]);
        $user->assignRole($request->role);
        return response()->json(['message' => 'User Added Successfully', 'success' => true]);
    }

    public function edit($id)
    {
        $user = User::with('roles')->find($id);
        return response()->json($user);
    }


    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user) {
            $user->update([
                'name' => Str::upper($request->fullname),
                'email' => $request->id,
            ]);
            $user->syncRoles($request->role);
            return response()->json(['message' => 'User Updated Successfully', 'success' => true]);
        }
        return response()->json('User not found', 404);
    }

    public function delete(Request $request)
    {
        User::whereid($request->id)->delete();
        return response()->json(['message' => 'User Deleted Successfully', 'success' => true]);
    }
}
