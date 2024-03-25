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

        // $mentorId = DB::table('mentorship')
        //     ->where('mentee_id', $usn)
        //     ->value('mentor_id');
        // $fullname = DB::table('teachers')
        //     ->select('fullname')
        //     ->where('mentor_id', $mentorId)
        //     ->get();

        if ($student_details->semester == 1) {
            $feedbacks = FeedbackForm::where('student_id', $usn)
                ->where('semester', 1)
                ->get();
            $subjects = Subject::where('semester_number', 1)->get();
            $attendance = Sem_1_attendance::where('student_id', $usn)->get();
            $mse = Sem_1_mse::where('student_id', $usn)->get();
        }
        // if($student_semester==2){

        // }
        // if($student_semester==3){

        // }
        // if($student_semester==4){

        // }

        // $pdf = Pdf::loadView('generate-pdf',compact('records'));
        // return $pdf->download('StudentDetails.pdf');
        $data = [
            'student_details' => $student_details,
            'feedbacks' => $feedbacks,
            'subjects' => $subjects,
            'attendance' => $attendance,
            'mse' => $mse,
        ];
        return view('generate-pdf', $data);
    }
}
