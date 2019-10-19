<?php


namespace App\Comment;

use App\Answer\Answer;
use App\Comment\Comment;
use App\Controller;

class DeleteCommentController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call(){

        $commentId = $this->args['id'];

        $comment = Comment::find($commentId);

        $comment->delete();
        
        return $this->response->withJson($comment->answers,200,JSON_UNESCAPED_UNICODE);
    }
}