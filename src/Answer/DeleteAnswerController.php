<?php

namespace App\Answer;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class DeleteAnswerController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }


    public function call()
    {
        Answer::where('id',$this->args  ['id'])
        ->delete();

        $this->response
        ->withStatus(200);

        return $this->response;
    }
}