<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz2;

class Quiz2Controller extends Controller
{
    public function createquiz2(Request $request)
    {
        $soal = Quiz2::create([
            'category'    => $request->category,
            'question'    => $request->question,
            'pembahasan'    => $request->pembahasan,
            'correct_answer'    => $request->correct_answer,
            'incorrect_answers'    => $request->incorrect_answers,
        ]);
        return $soal;
    }

    public function quiz2($category){
        try {
            $soal = Quiz2::where('category',$category)->firstOrFail();
            return Quiz2::where('category',$category)->get()->toArray();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $soal = json_encode(['error' => 'Tidak Ada Hasil']);
            return $soal;
        }
    }
}
