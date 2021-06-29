<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['id','student_id','date', 'status'];

    protected $table = 't_registration';
    public $timestamps = false;
}
