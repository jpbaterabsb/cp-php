<?php
declare(strict_types=1);

namespace App\User;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveUserController extends Controller
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
        $user = $this->request->getParsedBody();

       $userId = $this->table->insertGetId(Array(
            "name" => $user["name"],
            "occupation" => $user["occupation"]
        ));

        $userPersisted = $this->table->find($userId);

        return $this->response->withJSON($userPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}