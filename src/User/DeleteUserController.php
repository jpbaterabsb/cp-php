<?php


namespace App\User;

use App\Controller;

class DeleteUserController extends Controller
{
    public function __construct($table){}

    public function call(){
        $userId = $this->args['id'];
        User::where('id',$userId)
            ->delete();
        return $this->response->withJson([],200,JSON_UNESCAPED_UNICODE);
    }
}