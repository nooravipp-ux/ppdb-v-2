<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class ManageExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listExam()
    {
        $timeNow = $this->getTime();
        $listExam = Exam::all();
        return view('student.exam-list', compact('listExam', 'timeNow'));
    }
    public function startExam($id)
    {
        $exam = Exam::find($id);
        $exam_id = $id;
        $examQuestions = Question::where('exam_id', $id)->get();
        $examQuestionsCount = Question::where('exam_id', $id)->count();
        return view('student.exam', compact('exam', 'examQuestions', 'examQuestionsCount', 'exam_id'));
    }
    public function manageExam()
    {
        $exam = DB::table('t_exam')
            ->select('t_exam.*', 'm_course.course_code', 'm_course.course_name')
            ->join('m_course', 'm_course.id', '=', 't_exam.course_id')->get();;
        $course = Course::all();
        return view('admin.manage-exam', compact('exam', 'course'));
    }

    public function addOrUpdateExam(Request $req)
    {

        $exam = Exam::updateOrCreate(
            [
                'course_id' => $req->course_id,
                'title' => $req->title,
                'time_limit' => $req->timeLimit,
                'date' => $req->date,
                'start_time' => $req->startTime,
                'end_time' => $req->endTime,
                'question_limit_display' => $req->examQuestDipLimit,
                'description' => $req->description
            ]
        );

        return response()->json(['status' => 'success', 'data' => $exam]);
    }


    public function manageExamQuestion($id)
    {
        $exam = Exam::find($id);
        $exam_id = $id;
        $examQuestions = Question::where('exam_id', $id)->get();
        $examQuestionsCount = Question::where('exam_id', $id)->count();
        return view('admin.manage-exam-question', compact('exam', 'examQuestions', 'examQuestionsCount', 'exam_id'));
    }

    public function updateExam(Request $request)
    {

        $updatedData = DB::table('t_exam')
            ->where('id', $request->id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'start_time' => $request->startTime,
                'end_time' => $request->endTime,
                'status' => $request->status,
                'time_limit' => $request->timeLimit
            ]);

        return redirect('/manage-exam');
    }

    public function deleteExam(Request $request)
    {

        return view('admin.manage-exam');
    }


    public function addCourse(Request $req)
    {

        $course = Course::updateOrCreate(
            [
                'course_code' => $req->course_code,
                'course_name' => $req->course_name
            ]
        );

        return response()->json(['status' => 'success', 'data' => $course]);
    }

    public function examReport()
    {
        $reportExam = DB::table('t_exam_attemp')
            ->select('t_student.nama_lengkap', 't_student.pilihan_jurusan', 't_exam.title', 't_exam_attemp.id', 't_exam_attemp.score', 't_exam_attemp.date', 't_exam_attemp.status')
            ->join('t_student', 't_student.id', '=', 't_exam_attemp.student_id')
            ->join('t_exam', 't_exam.id', '=', 't_exam_attemp.exam_id')
            ->orderBy('t_exam_attemp.score', 'desc')
            ->get();
        return view('admin.exam-report', compact('reportExam'));
    }

    public function examHasTaken($exam_id, $student_id)
    {
        $hasTaken = DB::table('t_exam_attemp')->where('exam_id', $exam_id)->where('student_id', $student_id)->count();

        if ($hasTaken > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getTime()
    {
        date_default_timezone_set('Asia/Jakarta');

        $timeNow = date('Y-m-d H:i:s');

        return response()->json($timeNow);
    }

    public function updateStatusKelulusan(Request $req)
    {

        if ($req->status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
            DB::table('t_exam_attemp')
            ->where('id', $req->id)
            ->update([
                'status' => $status
            ]);

        return response()->json(['res' => 'success']);
    }
}
