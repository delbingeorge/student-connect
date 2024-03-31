<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    public function admin()
    {
        $teachers = Teacher::all();
        return view('admin.dashboard',compact('teachers')); 
    }

    public function student()
    {
        if(!Session::has('user_id') || Session::get('role') != "student")
            return redirect('/');

        return view('student.dashboard');
    }

    public function teacher()
    {
        $students = Student::all();
        return view('teacher.dashboard',compact('students')); 
    }
}
