<?php

namespace App\Comment;

use App\Comment\Comment;
use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveCommentController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $comment = $this->request->getParsedBody();

        $commentPersisted = Comment::create(Array(
            "comment" => $comment["comment"],
            "Post_id" => $comment["postId"],
            "Comment_date" => date('Y-m-d H:i:s')
        ));

        return $this->response->withJSON($commentPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}