<?php


namespace App\User;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class UpdateUserController extends Controller
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
        $user = $this->request->getParsedBody();
        $userId = $this->table
            ->where('id',$user['id'])
            ->update($user);
        return $this->response->withJSON($user,200,JSON_UNESCAPED_UNICODE);
    }
}