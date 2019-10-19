<?php
declare(strict_types=1);

$app->group('/user', function (\Slim\App $app) {
    $app->get('/{id}', \App\User\FindOneUserController::class);
    $app->get('', \App\User\FindAllUserController::class);
    $app->post('', \App\User\SaveUserController::class);
    $app->put('/{id}', \App\User\UpdateUserController::class);
    $app->delete('/{id}', \App\User\DeleteUserController::class);
});


$app->group('/post', function (\Slim\App $app) {
    $app->get('/{id}', \App\Post\FindOnePostController::class);
    $app->get('', \App\Post\FindAllPostController::class);
    $app->post('', \App\Post\SavePostController::class);
    $app->put('/{id}', \App\Post\UpdatePostController::class);
    $app->delete('/{id}', \App\Post\DeletePostController::class);
});

$app->group('/image', function (\Slim\App $app) {
    $app->get('/{id}', \App\Image\FindOneImageController::class);
    $app->get('', \App\Image\FindAllImageController::class);
    $app->post('', \App\Image\SaveImageController::class);
    $app->put('/{id}', \App\Image\UpdateImageController::class);
    $app->delete('/{id}', \App\Image\DeleteImageController::class);
});


$app->group('/comment', function (\Slim\App $app) {
    $app->get('/{id}', \App\Comment\FindOneCommentController::class);
    $app->get('', \App\Comment\FindAllCommentController::class);
    $app->post('', \App\Comment\SaveCommentController::class);
    $app->put('/{id}', \App\Comment\UpdateCommentController::class);
    $app->delete('/{id}', \App\Comment\DeleteCommentController::class);
});



$app->group('/answer', function (\Slim\App $app) {
    $app->get('/{id}', \App\Answer\FindOneAnswerController::class);
    $app->get('', \App\Answer\FindAllAnswerController::class);
    $app->post('', \App\Answer\SaveAnswerController::class);
    $app->put('/{id}', \App\Answer\UpdateAnswerController::class);
    $app->delete('/{id}', \App\Answer\DeleteAnswerController::class);
});
