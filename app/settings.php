<?php
return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/templates',
            'twig' => [
                'cache' => __DIR__ . '/../cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],

        // monolog settings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../log/app.log',
        ],

        // sql settings
        'sql' => [
            'default' => [
                'dsn' => 'mysql:host=localhost;dbname=db_project',
                'username' => 'root',
                'password' => '',
            ],
            'information_schema' => [
                'dsn' => 'mysql:host=localhost;dbname=information_schema',
                'username' => 'root',
                'password' => '',
            ]
        ]
    ],
];
