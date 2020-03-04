<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class quizController extends Controller
{
    public function createquiz(Request $request)
    {
        $quiz = Quiz::create([
            'category'    => $request->category,
            'quiz'  => $request->quiz,
        ]);
        return $quiz;
    }

    public function showquiz1()
    {
        $quiz = Quiz::where('category', '=', 'modul1')->get();
        return $quiz->toArray();
    }

    public function showquiz2()
    {
        $quiz = Quiz::where('category', '=', 'modul2')->get();
        return $quiz->toArray();
    }
    public function showquiz3()
    {
        $quiz = Quiz::where('category', '=', 'modul3')->get();
        return $quiz->toArray();
    }
    public function showquiz4()
    {
        $quiz = Quiz::where('category', '=', 'modul4')->get();
        return $quiz->toArray();
    }
    public function exam()
    {
        $quiz = Quiz::where('category', '=', 'ujian')->get();
        return $quiz->toArray();
    }

    public function exam2()
    {
        $quiz = Quiz::where('category', '=', 'ujian2')->get();
        return $quiz->toArray();
    }

    public function exam3()
    {
        $quiz = Quiz::where('category', '=', 'ujian3')->get();
        return $quiz->toArray();
    }
}
