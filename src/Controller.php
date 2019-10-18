<?php


namespace App;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

abstract class Controller
{


    protected $request;
    protected $response;
    protected $args;

    public function __invoke(Request $request, Response $response, $args)
    {

        $this->request = $request;
        $this->response = $response;
        $this->args = $args;

        $response = $this->call();

        return $response;
    }

    public abstract function call();

}