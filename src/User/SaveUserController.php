<?php
declare(strict_types=1);

namespace App\User;

use App\Controller;
use Illuminate\Database\Query\Builder;
use Psr\Log\LoggerInterface;

class SaveUserController extends Controller
{
    

    public function __construct($table){}

    public function call()
    {
        $user = $this->request->getParsedBody();

        $userPersisted = User::create(Array(
            "name" => $user["name"],
            "occupation" => $user["occupation"]
        ));

        return $this->response->withJSON($userPersisted,200,JSON_UNESCAPED_UNICODE);
    }
}