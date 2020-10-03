<?php

return[

    'settings'=>[
        'displayErrorDetails' => true,
        'determineRouterBeforeAppMiddleware' => false,
        'template_path' => __DIR__ . '/templates/',

        'db' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'app',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],

    ],

];