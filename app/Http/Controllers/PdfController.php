<?php

namespace App\Http\Controllers;

use App\Models\FeedbackForm;
use App\Models\Sem_1_attendance;
use App\Models\Sem_1_mse;
use App\Models\Student;
use App\Models\Subject;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function downloadPdf(Request $request)
    {

        $usn = $request->query('usn');
        $student_details = Student::where('student_id', $usn)
            ->first();



        if ($student_details->semester == 1) {
            // $feedbacks = FeedbackForm::where('student_id', $usn)
            //     ->where('semester', 1)
            //     ->get();
            // $attendance = Sem_1_attendance::where('student_id', $usn)->get();
            // $subjects = Subject::where('semester_number', 1)->get();
            // // dd($attendance);
            // $mse = Sem_1_mse::where('student_id', $usn)->get();
            // $data = [
            //     'student_details' => $student_details,
            //     'feedbacks' => $feedbacks,
            //     'attendance' => $attendance,
            //     'subjects' => $subjects,
            //     'mse' => $mse,
            // ];

            $feedbacks = DB::select("SELECT * FROM feedback_forms WHERE student_id = ? AND semester = ?", [$usn, 1]);
            $sem1_attendance = DB::select("SELECT * FROM sem_1_attendance WHERE student_id = ?", [$usn]);
            $sem1_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [1]);
            $sem1_mse = DB::select("SELECT * FROM sem_1_mse WHERE student_id = ?", [$usn]);

            $data = [
                'student_details' => $student_details,
                'feedbacks' => $feedbacks,
                'sem1_attendance' => $sem1_attendance,
                'sem1_subjects' => $sem1_subjects,
                'sem1_mse' => $sem1_mse,
            ];

            // $pdf = Pdf::loadView('pdf/generate-pdf',$data);
            // return $pdf->download($student_details->fullname.".pdf");
            // dd($data);
            return view('pdf/generate-pdf', $data);
        }

        if ($student_details->semester == 2) {
            $feedbacks = DB::select("SELECT * FROM feedback_forms WHERE student_id = ? AND semester IN (?, ?)", [$usn, 1, 2]);
            $sem1_attendance = DB::select("SELECT * FROM sem_1_attendance WHERE student_id = ?", [$usn]);
            $sem2_attendance = DB::select("SELECT * FROM sem_2_attendance WHERE student_id = ?", [$usn]);
            $sem1_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [1]);
            $sem2_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [2]);
            $sem1_mse = DB::select("SELECT * FROM sem_1_mse WHERE student_id = ?", [$usn]);
            $sem2_mse = DB::select("SELECT * FROM sem_2_mse WHERE student_id = ?", [$usn]);

            $data = [
                'student_details' => $student_details,
                'feedbacks' => $feedbacks,
                'sem1_attendance' => $sem1_attendance,
                'sem2_attendance' => $sem2_attendance,
                'sem1_subjects' => $sem1_subjects,
                'sem2_subjects' => $sem2_subjects,
                'sem1_mse' => $sem1_mse,
                'sem2_mse' => $sem2_mse,
            ];

            // $pdf = Pdf::loadView('pdf/generate-pdf',$data);
            // return $pdf->download($student_details->fullname.".pdf");
            // dd($data);
            return view('pdf/generate-pdf', $data);
        }

        if ($student_details->semester == 3) {
            $feedbacks = DB::select("SELECT * FROM feedback_forms WHERE student_id = ? AND semester IN (?, ?, ?)", [$usn, 1, 2, 3]);
            $sem1_attendance = DB::select("SELECT * FROM sem_1_attendance WHERE student_id = ?", [$usn]);
            $sem2_attendance = DB::select("SELECT * FROM sem_2_attendance WHERE student_id = ?", [$usn]);
            $sem3_attendance = DB::select("SELECT * FROM sem_3_attendance WHERE student_id = ?", [$usn]);
            $sem1_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [1]);
            $sem2_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [2]);
            $sem3_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [3]);
            $sem1_mse = DB::select("SELECT * FROM sem_1_mse WHERE student_id = ?", [$usn]);
            $sem2_mse = DB::select("SELECT * FROM sem_2_mse WHERE student_id = ?", [$usn]);
            $sem3_mse = DB::select("SELECT * FROM sem_3_mse WHERE student_id = ?", [$usn]);

            $data = [
                'student_details' => $student_details,
                'feedbacks' => $feedbacks,
                'sem1_attendance' => $sem1_attendance,
                'sem2_attendance' => $sem2_attendance,
                'sem3_attendance' => $sem3_attendance,
                'sem1_subjects' => $sem1_subjects,
                'sem2_subjects' => $sem2_subjects,
                'sem3_subjects' => $sem3_subjects,
                'sem1_mse' => $sem1_mse,
                'sem2_mse' => $sem2_mse,
                'sem3_mse' => $sem3_mse,
            ];

            // $pdf = Pdf::loadView('pdf/generate-pdf',$data);
            // return $pdf->download($student_details->fullname.".pdf");
            // dd($data);
            return view('pdf/generate-pdf', $data);
        }

        if ($student_details->semester == 4) {
            $feedbacks = DB::select("SELECT * FROM feedback_forms WHERE student_id = ? AND semester IN (?, ?, ?)", [$usn, 1, 2, 3]);
            $sem1_attendance = DB::select("SELECT * FROM sem_1_attendance WHERE student_id = ?", [$usn]);
            $sem2_attendance = DB::select("SELECT * FROM sem_2_attendance WHERE student_id = ?", [$usn]);
            $sem3_attendance = DB::select("SELECT * FROM sem_3_attendance WHERE student_id = ?", [$usn]);
            $sem4_attendance = DB::select("SELECT * FROM sem_4_attendance WHERE student_id = ?", [$usn]);
            $sem1_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [1]);
            $sem2_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [2]);
            $sem3_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [3]);
            $sem4_subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ?", [4]);
            $sem1_mse = DB::select("SELECT * FROM sem_1_mse WHERE student_id = ?", [$usn]);
            $sem2_mse = DB::select("SELECT * FROM sem_2_mse WHERE student_id = ?", [$usn]);
            $sem3_mse = DB::select("SELECT * FROM sem_3_mse WHERE student_id = ?", [$usn]);
            $sem4_mse = DB::select("SELECT * FROM sem_4_mse WHERE student_id = ?", [$usn]);

            $data = [
                'student_details' => $student_details,
                'feedbacks' => $feedbacks,
                'sem1_attendance' => $sem1_attendance,
                'sem2_attendance' => $sem2_attendance,
                'sem3_attendance' => $sem3_attendance,
                'sem4_attendance' => $sem4_attendance,
                'sem1_subjects' => $sem1_subjects,
                'sem2_subjects' => $sem2_subjects,
                'sem3_subjects' => $sem3_subjects,
                'sem4_subjects' => $sem4_subjects,
                'sem1_mse' => $sem1_mse,
                'sem2_mse' => $sem2_mse,
                'sem3_mse' => $sem3_mse,
                'sem4_mse' => $sem4_mse,
            ];

            // $pdf = Pdf::loadView('pdf/generate-pdf',$data);
            // return $pdf->download($student_details->fullname.".pdf");
            // dd($data);
            return view('pdf/generate-pdf', $data);
        }
    }
}
