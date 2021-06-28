<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    use HasFactory;
    protected $fillable = ['id','student_id','exam_id','question_id','exam_answer','exam_answer_status','created_at'];

    protected $table = 't_exam_answer';
    public $timestamps = false;
}
