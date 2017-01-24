<?php
namespace App\Repositories;

use App\Models\Question;

class QuestionRepository implements QuestionRepositoryInterface {

  protected $question;
  
  public function __construct(){
    $this->question = new Question();
  }

  public function getQ(){
    $result = $this->q->get();
    return $result;
  }

  public function createQ($data){
    $this->q
  }

}
