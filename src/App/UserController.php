<?php
declare(strict_types=1);

namespace App;

use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class UserController
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

    public function __invoke(Request $request, Response $response, $args)
    {
        $user = $request->getParsedBody();

        $this->table->insert(Array(
            "name" => $user["name"],
            "occupation" => $user["occupation"]
        ));
        $response->getBody()->write(json_encode($user));
        return $response;
    }
}