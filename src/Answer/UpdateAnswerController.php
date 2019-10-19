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

        $request = $this->request->getParsedBody();

        $answer = Array(
            "Comment_id" => $request['commentId'],
            "Answer_date" => date('Y-m-d H:i:s'),
            "answer" => $request['answer'],
        );

        Answer::where('id',$answerId)
                ->update($answer);

        $answer['id'] = $answerId;
        return $this->response->withJSON($answer,200,JSON_UNESCAPED_UNICODE);
    }
}