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








$container[\App\Image\SaveImageController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Image');
    return new \App\Image\SaveImageController($logger, $table);
};


$container[\App\Image\FindOneImageController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Image');
    return new \App\Image\FindOneImageController($logger, $table);
};


$container[\App\Image\FindAllImageController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Image');
    return new \App\Image\FindAllImageController($logger, $table);
};

$container[\App\Image\UpdateImageController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Image');
    return new \App\Image\UpdateImageController($logger, $table);
};









$container[\App\Answer\SaveAnswerController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\SaveAnswerController($logger, $table);
};


$container[\App\Answer\FindOneAnswerController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\FindOneAnswerController($logger, $table);
};


$container[\App\Answer\FindAllAnswerController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\FindAllAnswerController($logger, $table);
};

$container[\App\Answer\UpdateAnswerController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\UpdateAnswerController($logger, $table);
};













$container[\App\Comment\SaveCommentController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\SaveCommentController($logger, $table);
};


$container[\App\Comment\FindOneCommentController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\FindOneCommentController($logger, $table);
};


$container[\App\Comment\FindAllCommentController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\FindAllCommentController($logger, $table);
};

$container[\App\Comment\UpdateCommentController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\UpdateCommentController($logger, $table);
};








