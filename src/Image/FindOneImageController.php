<?php


namespace App\Image;

use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOneImageController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call()
    {
        $imageId = $this->args['id'];

        $image = Image::find($imageId);

        return $this->response->withJSON($image,200,JSON_UNESCAPED_UNICODE);
    }
}