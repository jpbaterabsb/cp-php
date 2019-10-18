<?php

namespace App\Answer;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class DeleteAnswerController extends Controller
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
        $answer = $this->request->getParsedBody();

        if ($answer['id'] != $this->args['id']){
            throw new \Exception("body id different of path variable id");
        }

        $answerId = $this->table
            ->where('id',$answer['id'])
            ->update(array(
                'id' => $answer['id'],
                'answer' => $answer['answer'],
                'Comment_id' => $answer['commentId'],
                'Answer_date' => date('Y-m-d H:i:s'),
            ));
        return $this->response->withJSON($answer,200,JSON_UNESCAPED_UNICODE);
    }
}