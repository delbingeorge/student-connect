<?php

namespace App\Http\Controllers;

use App\Models\Mentorship;
use App\Models\Student;
use App\Models\Teacher;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class FacultyController extends Controller
{
    public function addStudent(Request $request)
    {
        $request->validate([
            'usn' => 'required',
            'fullname' => 'required',
            'semester' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        try {
            $user = new User;
            $user->user_id = $request->usn;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'student';
            $user->save();

            $student = new Student;
            $student->student_id = $request->usn;
            $student->fullname = $request->fullname;
            $student->semester = $request->semester;
            $student->contact = $request->contact;
            $student->email = $request->email;
            $student->save();

            $mentorship_table = new Mentorship;
            $mentorship_table->mentor_id = session('user_id');
            $mentorship_table->mentee_id = $request->usn;
            $mentorship_table->save();
            // dd(session('user_id'), $request->usn);
            return redirect()->route('teacher.dashboard')->with('success', 'Student added successfully.');

        } catch (QueryException $exception) {
            $errorCode = $exception->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect()->route('teacher.dashboard')->with('error', 'Student USN already exists.');
            }
            // return redirect()->route('teacher.dashboard')->with('error', 'Database error occurred.');
            dd($errorCode);
        } catch (Exception $exception) {
            return redirect()->route('teacher.dashboard')->with('error', $exception->getMessage());
        }
    }

    public function search(Request $request)
    {
        $semester = $request->query('semester');
        $id = $request->query('id');
        $role = $request->query('role');

        if ($role == 'student') {
            if (isset($semester)) {
                if ($semester == 'all') {
                    $students = Student::all();
                    return redirect()->route('teacher.dashboard');
                } else {
                    $students = Student::where('semester', $semester)->get();
                    return view('teacher.dashboard', compact('students'));
                }
            } elseif (isset($id)) {
                $students = Student::where('student_id', $id)->get();
                return view('teacher.dashboard', compact('students'));
            } else {
                $students = Student::all();
                return redirect()->route('teacher.dashboard');
            }
        }
        if ($role == 'teacher') {
            if (isset($id)) {
                $teachers = Teacher::where('emp_id', $id)->get();
                return view('teacher/view-faculties', compact('teachers'));
            } else {
                return redirect()->route('view-faculties');
            }
        }
    }
}
