<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'category', 'quiz',
    ];

    protected $casts = [
        'quiz' => 'array'
    ];

    protected $table = 'quiz';
}
