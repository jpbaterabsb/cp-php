<?php


namespace App\User;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class UpdateUserController extends Controller
{
    protected $table;

    public function __construct($table){
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