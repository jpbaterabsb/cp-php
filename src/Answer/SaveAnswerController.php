<?php

namespace App\Answer;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveAnswerController extends Controller
{
    protected $logger;
    protected $table;

    public function __construct(
        LoggerInterface $logger,
        Builder $table
    ) {
        $this->logger = $logger;
        $this->table = $table;
    }

    public function call()
    {
        $answer = $this->request->getParsedBody();

        $answerId = $this->table->insertGetId(Array(
            "answer" => $answer["answer"],
            "Comment_id" => $answer["commentId"],
            "Answer_date" => date('Y-m-d H:i:s')
        ));

        $answerPersisted = $this->table->find($answerId);

        return $this->response->withJSON($answerPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}