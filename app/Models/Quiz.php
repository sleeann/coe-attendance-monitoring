<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quiz';
    protected $fillable = ['student_id', 'semester', 'date', 'term', 'score', 'quiz_item', 'quiz_no', 'score_in_percent'];
}
