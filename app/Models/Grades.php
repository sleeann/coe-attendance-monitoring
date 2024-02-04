<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'semester', 'date', 'term', 'grade', 'remarks'];
}
