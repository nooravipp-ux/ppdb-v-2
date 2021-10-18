<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','description','status','created_at'];

    protected $table = 't_announcement';
    public $timestamps = false;
}
