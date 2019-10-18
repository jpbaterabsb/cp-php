<?php


namespace App\Image;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class UpdateImageController extends Controller
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
        $image = $this->request->getParsedBody();
        $imageId = $this->table
            ->where('id',$image['id'])
            ->update(array(
                'id' => $image['id'],
                'name' => $image['name'],
                'Post_id' => $image['postId']
            ));
        return $this->response->withJSON($image,200,JSON_UNESCAPED_UNICODE);
    }
}