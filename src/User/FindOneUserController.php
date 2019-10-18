<?php


namespace App\User;

use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOneUserController extends Controller
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
        $userId = $this->args['id'];

        $user = $this->table->find($userId);

        return $this->response->withJSON($user,200,JSON_UNESCAPED_UNICODE);
    }
}