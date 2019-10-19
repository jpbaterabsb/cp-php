<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';


$settings = require __DIR__ . '/../app/settings.php';

$app = new \Slim\App($settings);

require __DIR__ . '/../app/dependencies.php';

require __DIR__ . '/../app/controller.php';

$app->group('/user', function (\Slim\App $app) {
    $app->get('/{id}', \App\User\FindOneUserController::class);
    $app->get('', \App\User\FindAllUserController::class);
    $app->post('', \App\User\SaveUserController::class);
    $app->put('/{id}', \App\User\UpdateUserController::class);
});


$app->group('/post', function (\Slim\App $app) {
    $app->get('/{id}', \App\Post\FindOnePostController::class);
    $app->get('', \App\Post\FindAllPostController::class);
    $app->post('', \App\Post\SavePostController::class);
    $app->put('/{id}', \App\Post\UpdatePostController::class);
});

$app->group('/image', function (\Slim\App $app) {
    $app->get('/{id}', \App\Image\FindOneImageController::class);
    $app->get('', \App\Image\FindAllImageController::class);
    $app->post('', \App\Image\SaveImageController::class);
    $app->put('/{id}', \App\Image\UpdateImageController::class);
});


$app->group('/comment', function (\Slim\App $app) {
    $app->get('/{id}', \App\Comment\FindOneCommentController::class);
    $app->get('', \App\Comment\FindAllCommentController::class);
    $app->post('', \App\Comment\SaveCommentController::class);
    $app->put('/{id}', \App\Comment\UpdateCommentController::class);
});



$app->group('/answer', function (\Slim\App $app) {
    $app->get('/{id}', \App\Answer\FindOneAnswerController::class);
    $app->get('', \App\Answer\FindAllAnswerController::class);
    $app->post('', \App\Answer\SaveAnswerController::class);
    $app->put('/{id}', \App\Answer\UpdateAnswerController::class);
    $app->delete('/{id}', \App\Answer\DeleteAnswerController::class);
});

$app->run();