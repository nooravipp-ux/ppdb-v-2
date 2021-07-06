<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class ManageExamController extends Controller
{
    public function listExam(){
        $listExam = Exam::all();
        return view('student.exam-list', compact('listExam'));
    }
    public function startExam($id){
        $exam = Exam::find($id);
        $exam_id = $id;
        $examQuestions = Question::where('exam_id', $id)->get();
        $examQuestionsCount = Question::where('exam_id', $id)->count();
        return view('student.exam', compact('exam','examQuestions','examQuestionsCount','exam_id'));
    }
    public function manageExam(){
        $exam = Exam::all();
        $course = Course::all();
        return view('admin.manage-exam', compact('exam', 'course'));
    }

    public function addOrUpdateExam(Request $req){
        
        $exam = Exam::updateOrCreate(
            ['course_id' => $req->course_id, 
            'title' => $req->title,
            'time_limit' => $req->timeLimit, 
            'question_limit_display' => $req->examQuestDipLimit,
            'description' => $req->description]
        );

        return response()->json(['status' => 'success', 'data' => $exam]);
    }

    public function manageExamQuestion($id){
        $exam = Exam::find($id);
        $exam_id = $id;
        $examQuestions = Question::where('exam_id', $id)->get();
        $examQuestionsCount = Question::where('exam_id', $id)->count();
        return view('admin.manage-exam-question', compact('exam','examQuestions','examQuestionsCount','exam_id'));
    }
    
    public function updateExam($id){
        return view('admin.manage-exam', compact('id'));
    }

    public function deleteExam($id){
        return view('admin.manage-exam');
    }


    public function addCourse(Request $req){

        $course = Course::updateOrCreate(
            ['course_code' => $req->course_code, 
            'course_name' => $req->course_name
            ]
        );

        return response()->json(['status' => 'success', 'data' => $course]);

    }

    public function examReport(){
        $reportExam = DB::table('t_exam_attemp')
                    ->select('t_student.nama_lengkap','t_exam.title','t_exam_attemp.score','t_exam_attemp.date')
                    ->join('t_student', 't_student.id', '=', 't_exam_attemp.student_id')
                    ->join('t_exam', 't_exam.id', '=', 't_exam_attemp.exam_id')
                    ->get();
        return view('admin.exam-report', compact('reportExam'));
    }

    public function examHasTaken($exam_id, $student_id){
        $hasTaken = DB::table('t_exam_attemp')->where('exam_id', $exam_id)->where('student_id', $student_id)->count();

        if($hasTaken > 0){
            return true;
        }else{
            return false;
        }
    }

}
