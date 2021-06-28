<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAttemp extends Model
{
    use HasFactory;
    protected $fillable = ['id','exam_id','student_id','status'];

    protected $table = 't_exam_attemp';
    public $timestamps = false;
}
