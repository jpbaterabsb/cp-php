<?php

namespace App\Post;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SavePostController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $post = $this->request->getParsedBody();

        $dateDb = date('Y-m-d H:i:s');

        $postPersisted = Post::create(Array(
            "message" => $post["message"],
            "User_id" => $post["userId"],
            "Post_date" => $dateDb,
        ));

        return $this->response->withJSON($postPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}