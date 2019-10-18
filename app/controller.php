<?php
declare(strict_types=1);

$container = $app->getContainer();

$container[\App\User\SaveUserController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('User');
    return new \App\User\SaveUserController($logger, $table);
};


$container[\App\User\FindOneUserController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('User');
    return new \App\User\FindOneUserController($logger, $table);
};


$container[\App\User\FindAllUserController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('User');
    return new \App\User\FindAllUserController($logger, $table);
};

$container[\App\User\UpdateUserController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('User');
    return new \App\User\UpdateUserController($logger, $table);
};



$container[\App\Post\SavePostController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Post');
    return new \App\Post\SavePostController($logger, $table);
};


$container[\App\Post\FindOnePostController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Post');
    return new \App\Post\FindOnePostController($logger, $table);
};


$container[\App\Post\FindAllPostController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Post');
    return new \App\Post\FindAllPostController($logger, $table);
};

$container[\App\Post\UpdatePostController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Post');
    return new \App\Post\UpdatePostController($logger, $table);
};






