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
            'pembahasan' => $request->pembahasan
        ]);
        return $quiz;
    }

    public function showquiz1($category)
    {
        try {
            $soal = Quiz::where('category',$category)->firstOrFail();
            return Quiz::where('category',$category)->get()->toArray();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $soal = json_encode(['error' => 'Tidak Ada Hasil']);
            return $soal;
        }
    }
}
