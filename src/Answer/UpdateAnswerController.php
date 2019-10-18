<?php

namespace App\Answer;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class UpdateAnswerController extends Controller
{
    protected $logger;
    protected $table;

    public function __construct(
        LoggerInterface $logger,
        Builder $table
    )
    {
        $this->logger = $logger;
        $this->table = $table;
    }

    public function call()
    {
        $answerId = $this->args['id'];

        Answer::where('id',$answerId)
                ->delete();


        return $this->response->withJSON($answer,200,JSON_UNESCAPED_UNICODE);
    }
}