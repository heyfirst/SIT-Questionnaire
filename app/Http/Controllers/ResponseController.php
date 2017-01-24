<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function resp($qid) {
        return view('questionnaire.resp');
    }
}
