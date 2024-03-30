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
            $feedbacks = FeedbackForm::where('student_id', $usn)
                ->where('semester', 1)
                ->get();
            $subjects = Subject::where('semester_number', 1)->get();
            $attendance = Sem_1_attendance::where('student_id', $usn)->get();
            // dd($attendance);
            $mse = Sem_1_mse::where('student_id', $usn)->get();
            $data = [
                'student_details' => $student_details,
                'feedbacks' => $feedbacks,
                'subjects' => $subjects,
                'attendance' => $attendance,
                'mse' => $mse,
            ];

            // $pdf = Pdf::loadView('pdf/ForSem1',$data);
            // return $pdf->download($student_details->fullname.".pdf");
            // dd($data);
            return view('pdf/ForSem1', $data);
        }

        if ($student_details->semester == 2) {
            $feedbacks = FeedbackForm::where('student_id', $usn)
                ->whereIn('semester', [1, 2])
                ->get();
            $subjects = DB::select("SELECT * FROM subjects WHERE semester_number = ? OR semester_number = ?", [1, 2]);
            $attendance = DB::select("SELECT * FROM sem_1_attendance LEFT JOIN sem_2_attendance ON sem_1_attendance.student_id = sem_2_attendance.student_id = ?", [$usn]);
            $mse = DB::select("SELECT * FROM sem_1_mse LEFT JOIN sem_2_mse ON sem_1_mse.student_id = sem_2_mse.student_id WHERE sem_1_mse.student_id = ?", [$usn]);

            $data = [
                'student_details' => $student_details,
                'feedbacks' => $feedbacks,
                'subjects' => $subjects,
                'attendance' => $attendance,
                'mse' => $mse,
            ];

            // $pdf = Pdf::loadView('pdf/ForSem1',$data);
            // return $pdf->download($student_details->fullname.".pdf");
            dd($data);
            return view('pdf/ForSem2', $data);
        }

        // if($student_semester==3){

        // }
        // if($student_semester==4){

        // }
    }
}
