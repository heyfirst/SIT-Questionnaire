<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\QuestionnaireRepositoryInterface;

class QuestionnaireController extends Controller
{
    protected $QuestionnaireRepository;

    public function __construct(QuestionnaireRepositoryInterface $QuestionnaireRepository) {
        $this->QuestionnaireRepository = $QuestionnaireRepository;
    }

    public function index() {
        $content = array(
            'qs' => $this->QuestionnaireRepository->getQ(),
        );
        
        return view('questionnaire.dashboard', $content);
    }

    public function each($qid) {
        return view('questionnaire.each');
    }

    public function create(Request $request){
        $data = $request->all();
        
        $this->QuestionnaireRepository->createQ($data);

        return redirect('/');
    }
}
