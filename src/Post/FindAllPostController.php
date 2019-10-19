<?php


namespace App\Post;


use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindAllPostController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $post = Post::all();
        return $this->response->withJSON($post,200,JSON_UNESCAPED_UNICODE);
    }
}