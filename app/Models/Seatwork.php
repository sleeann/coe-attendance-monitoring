<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seatwork extends Model
{
    use HasFactory;
    protected $table = 'seatwork';
    protected $fillable = ['student_id', 'semester', 'date', 'term', 'score', 'seatwork_item', 'seatwork_no', 'score_in_percent'];
}
