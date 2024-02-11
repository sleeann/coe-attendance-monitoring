<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $table = 'assignment';
    protected $fillable = ['student_id', 'semester', 'date', 'term', 'score', 'assignment_item', 'assignment_no', 'score_in_percent'];
}
