<?php


namespace App\Post;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class UpdatePostController extends Controller
{
    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $post = $this->request->getParsedBody();

        $this->table
            ->where('id',$post['id'])
            ->update(array(
                'Post_date' => date('Y-m-d H:i:s'),
                'User_id' => $post['userId'],
                'id' => $post['id'],
                'message' => $post['message']
            ));
        return $this->response->withJSON([],200,JSON_UNESCAPED_UNICODE);
    }
}