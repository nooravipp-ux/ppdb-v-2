<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['id','exam_id','question','opt_1','opt_2','opt_3','opt_4','answer','status'];

    protected $table = 't_exam_question';
    public $timestamps = false;
}
