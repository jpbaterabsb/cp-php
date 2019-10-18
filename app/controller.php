<?php
declare(strict_types=1);
$container = $app->getContainer();

$container[\App\UserController::class] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('User');
    return new \App\UserController($logger, $table);
};