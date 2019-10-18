<?php
declare(strict_types=1);

namespace App\Image;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveImageController extends Controller
{
    protected $logger;
    protected $table;

    public function __construct(
        LoggerInterface $logger,
        Builder $table
    ) {
        $this->logger = $logger;
        $this->table = $table;
    }

    public function call()
    {
        $image = $this->request->getParsedBody();

        $imageId = $this->table->insertGetId(Array(
            "name" => $image["name"],
            "Post_id" => $image["postId"]
        ));

        $imagePersisted = $this->table->find($imageId);

        return $this->response->withJSON($imagePersisted,200,JSON_UNESCAPED_UNICODE);
    }
}