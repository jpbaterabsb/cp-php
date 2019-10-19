<?php
declare(strict_types=1);

namespace App\Image;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveImageController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $image = $this->request->getParsedBody();

        $imagePersisted = Image::create(Array(
            "name" => $image["name"],
            "Post_id" => $image["postId"]
        ));
        
        return $this->response->withJSON($imagePersisted,200,JSON_UNESCAPED_UNICODE);
    }
}