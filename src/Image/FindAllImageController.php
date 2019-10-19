<?php


namespace App\Image;


use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindAllImageController extends Controller
{
    protected $table;

    public function __construct($table){
        $this->table = $table;
    }


    public function call()
    {
        $image = Image::all();
        return $this->response->withJSON($image,200,JSON_UNESCAPED_UNICODE);
    }
}