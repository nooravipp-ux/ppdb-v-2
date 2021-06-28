<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['id','course_code','course_name','created_at'];

    protected $table = 'm_course';
    public $timestamps = false;
}
