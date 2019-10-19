<?php


namespace App\User;


use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;
use \App\Controller;

class FindAllUserController extends Controller
{

    public function __construct($table){}

    public function call()
    {
        $user = User::all();

        return $this->response->withJSON($user,200,JSON_UNESCAPED_UNICODE);
    }
}