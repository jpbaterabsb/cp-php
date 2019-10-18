<?php


namespace App\User;


use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindAllUserController extends Controller
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
        $user = $this->table->get();

        return $this->response->withJSON($user,200,JSON_UNESCAPED_UNICODE);
    }
}