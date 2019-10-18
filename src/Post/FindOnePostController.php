<?php


namespace App\Post;

use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOnePostController extends Controller
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
        $postId = $this->args['id'];

        $post = $this->table->find($postId);

        return $this->response->withJSON($post,200,JSON_UNESCAPED_UNICODE);
    }
}