<?php

namespace App\Comment;

use App\Answer\Comment;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindAllCommentController extends Controller
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
        $comment = Comment::all();
        return $this->response->withJSON($comment,200,JSON_UNESCAPED_UNICODE);
    }
}