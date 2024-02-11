<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'semester', 'date', 'term', 'score', 'exam_item', 'score_in_percent'];
}
