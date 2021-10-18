<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = ['id','course_id','title','time_limit','date','start_time','end_time','question_limit_display','description','created_at'];

    protected $table = 't_exam';
    public $timestamps = false;
}
