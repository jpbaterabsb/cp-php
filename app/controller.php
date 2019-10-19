<?php
declare(strict_types=1);

$container = $app->getContainer();

$container[\App\User\SaveUserController::class] = function ($c) {
    $table = $c->get('db')->table('User');
    return new \App\User\SaveUserController($table);
};


$container[\App\User\FindOneUserController::class] = function ($c) {
    $table = $c->get('db')->table('User');
    return new \App\User\FindOneUserController($table);
};


$container[\App\User\FindAllUserController::class] = function ($c) {
    $table = $c->get('db')->table('User');
    return new \App\User\FindAllUserController($table);
};

$container[\App\User\UpdateUserController::class] = function ($c) {
    $table = $c->get('db')->table('User');
    return new \App\User\UpdateUserController($table);
};


$container[\App\User\DeleteUserController::class] = function ($c) {
    $table = $c->get('db')->table('User');
    return new \App\User\DeleteUserController($table);
};



$container[\App\Post\SavePostController::class] = function ($c) {
    $table = $c->get('db')->table('Post');
    return new \App\Post\SavePostController($table);
};


$container[\App\Post\FindOnePostController::class] = function ($c) {
    $table = $c->get('db')->table('Post');
    return new \App\Post\FindOnePostController($table);
};


$container[\App\Post\FindAllPostController::class] = function ($c) {
    $table = $c->get('db')->table('Post');
    return new \App\Post\FindAllPostController($table);
};

$container[\App\Post\UpdatePostController::class] = function ($c) {
    $table = $c->get('db')->table('Post');
    return new \App\Post\UpdatePostController($table);
};

$container[\App\Post\DeletePostController::class] = function ($c) {
    $table = $c->get('db')->table('Post');
    return new \App\Post\DeletePostController($table);
};







$container[\App\Image\SaveImageController::class] = function ($c) {
    $table = $c->get('db')->table('Image');
    return new \App\Image\SaveImageController($table);
};


$container[\App\Image\FindOneImageController::class] = function ($c) {
    $table = $c->get('db')->table('Image');
    return new \App\Image\FindOneImageController($table);
};


$container[\App\Image\FindAllImageController::class] = function ($c) {
    $table = $c->get('db')->table('Image');
    return new \App\Image\FindAllImageController($table);
};

$container[\App\Image\UpdateImageController::class] = function ($c) {
    $table = $c->get('db')->table('Image');
    return new \App\Image\UpdateImageController($table);
};

$container[\App\Image\DeleteImageController::class] = function ($c) {
    $table = $c->get('db')->table('Image');
    return new \App\Image\DeleteImageController($table);
};









$container[\App\Answer\SaveAnswerController::class] = function ($c) {
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\SaveAnswerController($table);
};


$container[\App\Answer\FindOneAnswerController::class] = function ($c) {
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\FindOneAnswerController($table);
};


$container[\App\Answer\FindAllAnswerController::class] = function ($c) {
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\FindAllAnswerController($table);
};

$container[\App\Answer\UpdateAnswerController::class] = function ($c) {
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\UpdateAnswerController($table);
};

$container[\App\Answer\DeleteAnswerController::class] = function ($c) {
    $table = $c->get('db')->table('Answer');
    return new \App\Answer\DeleteAnswerController($table);
};













$container[\App\Comment\SaveCommentController::class] = function ($c) {
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\SaveCommentController($table);
};


$container[\App\Comment\FindOneCommentController::class] = function ($c) {
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\FindOneCommentController($table);
};


$container[\App\Comment\FindAllCommentController::class] = function ($c) {
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\FindAllCommentController($table);
};

$container[\App\Comment\UpdateCommentController::class] = function ($c) {
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\UpdateCommentController($table);
};

$container[\App\Comment\DeleteCommentController::class] = function ($c) {
    $table = $c->get('db')->table('Comment');
    return new \App\Comment\DeleteCommentController($table);
};








