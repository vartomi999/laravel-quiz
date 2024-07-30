<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $question = Question::with('answers')->inRandomOrder()->first();

        return view('quiz.index', compact('question'));
    }

    public function checkAnswer(Request $request)
    {
        $question = Question::with('answers')->findOrFail($request->question_id);
        $selectedAnswer = $request->answer_id;

        $isCorrect = $question->answers->where('id', $selectedAnswer)->first()->is_correct;

        return view('quiz.result', compact('isCorrect', 'question'));
    }

    public function nextQuestion()
    {
        return redirect()->route('quiz.index');
    }
}

