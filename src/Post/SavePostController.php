<?php

namespace App\Post;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SavePostController extends Controller
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
        $post = $this->request->getParsedBody();

        $dateDb = date('Y-m-d H:i:s');

        $postId = $this->table->insertGetId(Array(
            "message" => $post["message"],
            "User_id" => $post["userId"],
            "Post_date" => $dateDb,
        ));

        $postPersisted = $this->table->find($postId);

        return $this->response->withJSON($postPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}