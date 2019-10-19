<?php

namespace App\Answer;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveAnswerController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $answer = $this->request->getParsedBody();
        $answerForPersist = new Answer();

        $answerPersisted = Answer::create(Array(
            "answer" => $answer["answer"],
            "Comment_id" => $answer["commentId"],
            "Answer_date" => date('Y-m-d H:i:s')
        ));
        
        return $this->response->withJSON($answerPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}