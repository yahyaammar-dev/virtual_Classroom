<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher_classroom extends Model
{
    use HasFactory;
    public $table  = "teacher_classrooms";
    public $timestamps = false;
}
