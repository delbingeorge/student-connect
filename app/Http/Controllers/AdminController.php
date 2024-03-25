<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;

class AdminController extends Controller
{
    public function addFaculty(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
        ]);

        try {

            $user = new User;
            $user->user_id = $request->id;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'teacher';
            $user->save();

            $teacher = new Teacher;
            $teacher->emp_id = $request->id;
            $teacher->fullname = $request->name;
            $teacher->designation = $request->designation;
            $teacher->email = $request->email;
            $teacher->contact = $request->contact;
            $teacher->save();
            return redirect()->route('admin.dashboard')->with('success', 'Faculty added successfully.');

        } catch (QueryException $exception) {
            $errorCode = $exception->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect()->route('admin.dashboard')->with('error', 'Emp ID already exists.');
            }
        }
    }

    public function editFaculty(Request $request)
    {
        $request->validate([
            'emp_id'=> 'required',
            'name' => 'required',
            'contact' => 'required',
        ]);

        try {
            $teacher = Teacher::where('emp_id', $request->emp_id)->first();
            $teacher->contact = $request->contact;
            $teacher->fullname = $request->name;
            $teacher->save();

            return redirect()->route('admin.dashboard')->with('success', 'Faculty updated successfully.');
        } catch (QueryException $exception) {
            return redirect()->route('admin.dashboard')->with('message', 'An error occurred while updating faculty.');
        }
    }
}
