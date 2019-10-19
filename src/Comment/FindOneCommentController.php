<?php

namespace App\Comment;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOneCommentController extends Controller
{
    protected $table;

    public function __construct($table){
        $this->table = $table;
    }


    public function call()
    {
        $commentId = $this->args['id'];

        $comment = Comment::find($commentId);

        return $this->response->withJSON($comment,200,JSON_UNESCAPED_UNICODE);
    }
}