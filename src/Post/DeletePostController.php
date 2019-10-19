<?php

namespace App\Post;

use App\Controller;

class DeletePostController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $postId = $this->args['id'];

        Post::where('id',$postId)
            ->delete();

        return $this->response->withJSON([],200,JSON_UNESCAPED_UNICODE);
    }
}