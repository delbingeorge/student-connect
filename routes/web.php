<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Models\Teacher;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Psy\Readline\Hoa\Console;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


/******************************???????*************************************/
// Route::get('/third-sem-subjects', function () {
//     if (Session::has('user_id') && Session::get('role') == "student") {
//         return view('student/subjects');
//     } else {
//         return redirect('/');
//     }
// })->name('third-sem-subjects');


/******************************Student and Faculty edit profile*************************************/
Route::get('/edit-profile', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/edit-profile');
    } else if (Session::has('user_id') && Session::get('role') == "teacher") {
        return view('teacher/edit-profile');
    } else {
        return redirect('/');
    }
})->name('edit-profile');



/******************************Feedback From*************************************/
Route::get('/redirecting-to-feedback-form', [StudentController::class, 'feedback_form'])->name('feedback-form');
Route::get('student-feedback-form', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        $studentName = session('studentName');
        $semester = session('current_semester');
        $subjects = session('subjects');
        return view('student/forms/feedback-form')->with(compact('subjects', 'studentName', 'semester'));
    } else {
        return redirect('/');
    }
})->name('student-feedback-form');

Route::post('/submit-feedback-form', [StudentController::class, 'submit_feedback_Form'])->name('submit-feedback-form');


/******************************MSE Marks From*************************************/
Route::get('/redirecting-first-mse-form', [StudentController::class, 'mse_form'])->name('first-mse-form');
Route::get('student-first-mse-form', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        $studentName = session('studentName');
        $semester = session('current_semester');
        $subjects = session('subjects');
        return view('student/forms/mse-one-form')->with(compact('subjects', 'studentName', 'semester'));
    } else {
        return redirect('/');
    }
})->name('student-first-mse-form');

Route::get('/redirecting-second-mse-form', [StudentController::class, 'mse_form'])->name('second-mse-form');
Route::get('student-second-mse-form', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        $studentName = session('studentName');
        $semester = session('current_semester');
        $subjects = session('subjects');
        return view('student/forms/mse-two-form')->with(compact('subjects', 'studentName', 'semester'));
    } else {
        return redirect('/');
    }
})->name('student-second-mse-form');

Route::post('/submit-mse-marks', [StudentController::class, 'submit_mse_marks'])->name('submit-mse-marks');



/******************************Admin Features*************************************/
Route::get('/admin', function () {
    return view('admin/index');
});

Route::post('/admin_login', [LoginController::class, 'admin_login'])->name('admin_login');
Route::post('/add_faculty', [AdminController::class, 'addFaculty'])->name('add_faculty');
Route::post('/edit_faculty', [AdminController::class, 'editFaculty'])->name('edit_faculty');

Route::get('/add-faculty', function () {
    if (Session::has('user_id') && Session::get('role') == "admin") {
        return view('admin/add-faculty');
    } else {
        return redirect('admin');
    }
})->name('add-faculty');

Route::get('/edit-faculty/{teacher_id}', function ($teacher_id) {
    if (Session::has('user_id') && Session::get('role') == "admin") {
        $teachers = Teacher::where(['emp_id' => $teacher_id])->first();
        return view('admin.edit-faculty', compact('teachers'));
    } else {
        return redirect('admin');
    }
})->name('edit-faculty');



/******************************Faculty Features*************************************/
Route::post('/add_student', [FacultyController::class, 'addStudent'])->name('add_student');

Route::get('/add-student', function () {
    if (Session::has('user_id') && (Session::get('role') == "teacher" || Session::get('role') == "hod")) {
        return view('teacher/add-student');
    } else {
        return redirect('/');
    }
})->name('add-student');

Route::get('/dashboard', function () {
    if (Session::has('user_id') && (Session::get('role') == "teacher" || Session::get('role') == "hod")) {
        return redirect()->route('teacher.dashboard');
    } else {
        return redirect('/');
    }
})->name('teacher_dashboard');

Route::get('/profile', function () {
    if (Session::has('user_id') && (Session::get('role') == "teacher" || Session::get('role') == "hod")) {
        return view('teacher/teacherprofile');
    } else {
        return redirect('/');
    }
})->name('teacher-profile');




/*******************************Student Features************************************/

Route::get('/student-profile', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/studentprofile');
    } else {
        return redirect('/');
    }
})->name('student-profile');

Route::get('/student_dashboard', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/dashboard');
    } else {
        return redirect('/');
    }
})->name('student_dashboard');



/******************************For viewing faculty(only for HOD)************************************ */
Route::get('/teacher/dashboard/faculties', function () {
    if (Session::has('user_id') && Session::get('role') == "hod") {
        $teachers = Teacher::whereNotIn('emp_id', [session('user_id')])->get();
        return view('teacher/view-faculties', compact('teachers'));
    } else {
        return redirect('/');
    }
})->name('view-faculties');



/*************************Error page*************************** */
Route::get('/error', function () {
    return view('error');
})->name('error');


Route::post('/student_staff_login', [LoginController::class, 'student_staff_login'])->name('student_staff_login');

/*********************************Middleware Login and Logout********************************/
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');
    Route::get('/teacher/dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
});


//***********************for searching mentees*****************************
Route::get('/teacher/dashboard/search', [FacultyController::class, 'search'])->name('view-by-semester');
// Route::get('/teacher/dashboard/students', [FacultyController::class,'search'])->name('search-by-usn');



/******************************PDF*************************************/
Route::get('/download-pdf', [App\Http\Controllers\PdfController::class, 'downloadPdf'])->name('download-pdf');