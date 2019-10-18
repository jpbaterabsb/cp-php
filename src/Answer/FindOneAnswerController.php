<?php

namespace App\Answer;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOneAnswerController extends Controller
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

        $answer = $this->table->find($answerId);

        return $this->response->withJSON($answer,200,JSON_UNESCAPED_UNICODE);
    }
}