<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lectures extends Model
{
    use HasFactory;
    public $table = "lecture";
    public $timestamps = false;
}
