<?php

namespace App\Answer;

use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindAllAnswerController extends Controller
{
    protected $table;

    public function __construct($table){
        $this->table = $table;
    }


    public function call()
    {
        $answer = Answer::with('comment')->get();
        return $this->response->withJSON($answer,200,JSON_UNESCAPED_UNICODE);
    }
}