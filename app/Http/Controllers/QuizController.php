<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function store(request $request)
    {
        $quiz = new quiz();
        $quiz->question = $request->question;
        $quiz->answer_true = $request->answer_true;
        $quiz->answer_false = $request->answer_false;
        $quiz->save();
        return response()->json(['result'=>'ok'], 201);
    }
}
