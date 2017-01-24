<?php
namespace App\Repositories;

use App\Models\Questionnaire;

class QuestionnaireRepository implements QuestionnaireRepositoryInterface {

    protected $q;
    
    public function __construct(){
        $this->q = new Questionnaire();
    }

    public function getQ(){
      $result = $this->q->get();
      return $result;
    }

    public function createQ($data){
        $this->q->insert([
            'qtitle'     => $data['qtitle'],
            'begin_date' => $data['begin_date'],
            'end_date'   => $data['end_date'],
        ]);
    }

}
