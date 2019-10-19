<?php


namespace App\Image;

use App\Controller;

class DeleteImageController extends Controller
{

    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function call(){

        $imageId = $this->args['id'];

        $image = Image::find($imageId);
        $image->delete();
        return $this->response->withJson([],200,JSON_UNESCAPED_UNICODE);
    }
}