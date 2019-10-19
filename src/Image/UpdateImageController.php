<?php


namespace App\Image;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class UpdateImageController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $image = $this->request->getParsedBody();
        
           Image::where('id',$image['id'])
            ->update(array(
                'id' => $image['id'],
                'name' => $image['name'],
                'Post_id' => $image['postId']
            ));
        return $this->response->withJSON([],200,JSON_UNESCAPED_UNICODE);
    }
}