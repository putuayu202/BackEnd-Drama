<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz2 extends Model
{
    protected $fillable = [
        'category', 'question','correct_answer','incorrect_answers', 'pembahasan',
    ];

    protected $casts = [
        'incorrect_answers' => 'array'
    ];

    protected $table = 'quiz3';
}
