<?php

namespace App\Comment;
use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveCommentController extends Controller
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
        $comment = $this->request->getParsedBody();

        $commentId = $this->table->insertGetId(Array(
            "comment" => $comment["comment"],
            "Post_id" => $comment["postId"],
            "Comment_date" => date('Y-m-d H:i:s')
        ));

        $commentPersisted = $this->table->find($commentId);

        return $this->response->withJSON($commentPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}