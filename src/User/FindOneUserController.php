<?php


namespace App\User;

use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindOneUserController extends Controller
{

    public function __construct($table){}

    public function call()
    {
        $userId = $this->args['id'];

        $user = User::find($userId);

        return $this->response->withJSON($user,200,JSON_UNESCAPED_UNICODE);
    }
}