<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\ExamAnswer;
use App\Models\Exam;
use App\Models\ExamAttemp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function addOrUpdateQuestions(Request $req){
        
        $question = Question::updateOrCreate(
            ['exam_id' => $req->exam_id, 
            'question' => $req->question,
            'opt_1' => $req->opt_1, 
            'opt_2' => $req->opt_2,
            'opt_3' => $req->opt_3,
            'opt_4' => $req->opt_4,
            'answer' => $req->correctAnswer]
        );


        return response()->json(['status' => 'success', 'data' => $question]);
    }

    public function submitAnswer(Request $req){
        $exam_answer = $req->answer;
        $examId = $req->exam_id;
        $student_id = auth::user()->student_id;
       
        foreach($exam_answer as $key => $value){
            $correct = $value['correct'];
            ExamAnswer::updateOrCreate([
                'student_id' => auth::user()->student_id,
                'exam_id' => $examId,
                'question_id' => $key,
                'exam_answer' => $correct,
                'exam_answer_status' => 0
            ]);

        }
        $over = DB::table('t_exam')
                ->join('t_exam_question', 't_exam.id','=','t_exam_question.exam_id')
                ->where('t_exam_question.exam_id', $examId)
                ->count();
        $score = DB::select("SELECT COUNT(*) AS score FROM t_exam_question 
                JOIN t_exam_answer ON 
                t_exam_question.id = t_exam_answer.question_id
                AND t_exam_question.answer = t_exam_answer.exam_answer
                WHERE t_exam_answer.exam_id = $examId AND t_exam_answer.student_id = $student_id");
        $score = (int)$score[0]->score / $over * 100;        

        ExamAttemp::updateOrCreate(
            ['exam_id' => $examId,
            'student_id' => auth::user()->student_id,
            'score' => $score,
            'status' => 1]
        );

        
        return response()->json(['res' => 'success']);

    }

    public function result($id){
        $exam = Exam::find($id);
        $result = DB::table('t_exam_question')
                ->join('t_exam_answer', 't_exam_question.id', '=','t_exam_answer.question_id')
                ->where('t_exam_answer.exam_id', $id)
                ->where('t_exam_answer.student_id', auth::user()->student_id)
                ->get();
        $user_id = auth::user()->student_id;
        $over = DB::table('t_exam')
                ->join('t_exam_question', 't_exam.id','=','t_exam_question.exam_id')
                ->where('t_exam_question.exam_id', $id)
                ->count();
        $score = DB::select("SELECT count(*) as score FROM t_exam_question 
                JOIN t_exam_answer ON 
                t_exam_question.id = t_exam_answer.question_id
                AND t_exam_question.answer = t_exam_answer.exam_answer
                WHERE t_exam_answer.exam_id = $id AND t_exam_answer.student_id = $user_id");
        $score = $score[0]->score;
        return view('student.result', compact('exam','result', 'score', 'over'));
    }

    public function deleteQuestion(Request $req){

        $question = Question::find($req->id);
        $question->delete();
    }
}
