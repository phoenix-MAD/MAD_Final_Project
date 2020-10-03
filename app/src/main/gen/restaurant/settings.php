<?php

return[

    'settings'=>[
        'displayErrorDetails' => true,
        'determineRouterBeforeAppMiddleware' => false,
        'template_path' => __DIR__ . '/templates/',

        'db' => [
            'driver' => 'mysql',
            'host' => '',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],

    ],

];