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
        Answer::where('id',$this->args  ['id'])
        ->delete();

        $this->response
        ->withStatus(200);

        return $this->response;
    }
}