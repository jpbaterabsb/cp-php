<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Logger;

return [
    'settings' => [
        'displayErrorDetails' => true, // Should be set to false in production
        // 'logger' => [
        //     'name' => 'slim-app',
        //     'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
        //     'level' => Logger::DEBUG,
        // ],
        'db' => [
            'driver' => 'mysql',
            'host' => 'remotemysql.com',
            'database' => 'hZYqBnwyQX',
            'username' => 'hZYqBnwyQX',
            'password' => 'KJxVYZA0qj',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ]
];
