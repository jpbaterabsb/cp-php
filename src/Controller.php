<?php


namespace App;

use Exception;
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

        try{
            $response = $this->call();
        }catch(Exception $e){
            $message =Array(
                'message' => $e->getMessage()
            );
            return $this->response->withJSON($message,500,JSON_UNESCAPED_UNICODE);
        }
        

        return $response;
    }

    public abstract function call();

}