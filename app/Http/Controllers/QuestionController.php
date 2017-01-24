<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function question($question_id) {
        return view('question.question');
    }
}
