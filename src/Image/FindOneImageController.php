<?php


namespace App\Image;

use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOneImageController extends Controller
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
        $imageId = $this->args['id'];

        $image = $this->table->find($imageId);

        return $this->response->withJSON($image,200,JSON_UNESCAPED_UNICODE);
    }
}