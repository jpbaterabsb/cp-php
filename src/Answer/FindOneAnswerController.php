<?php

namespace App\Answer;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOneAnswerController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $answerId = $this->args['id'];

        $answer =   Answer::find($answerId);

        return $this->response->withJSON($answer,200,JSON_UNESCAPED_UNICODE);
    }
}