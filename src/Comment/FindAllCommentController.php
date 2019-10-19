<?php

namespace App\Comment;

use App\Comment\Comment;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindAllCommentController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }


    public function call()
    {
        $comment = Comment::all();
        return $this->response->withJSON($comment,200,JSON_UNESCAPED_UNICODE);
    }
}