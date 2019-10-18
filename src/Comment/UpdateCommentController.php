<?php

namespace App\Comment;
use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class UpdateCommentController extends Controller
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
        $comment = $this->request->getParsedBody();

        if ($comment['id'] != $this->args['id']){
            throw new \Exception("body id different of path variable id");
        }

        $commentId = $this->table
            ->where('id',$comment['id'])
            ->update(array(
                'id' => $comment['id'],
                'comment' => $comment['comment'],
                'Post_id' => $comment['postId'],
                'Comment_date' => date('Y-m-d H:i:s'),
            ));
        return $this->response->withJSON($comment,200,JSON_UNESCAPED_UNICODE);
    }
}