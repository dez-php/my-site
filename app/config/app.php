<?php
// dez@dez-pc:/var/www/my/dev-id.net$ dez_tool orm_entity -cdev -tsources -d app/models/Entity --namespace="App\\Model\\Entity"

return [
    'application'   => [

        'staticPath'    => '/static/',
        'basePath'      => '/',

        'autoload'              => [
            'App\\Controller'     => __DIR__ . '/../controllers',
            'App\\Model'          => __DIR__ . '/../models',
        ],
        'modelDirectory'        => __DIR__ . '/../models',
        'controllerDirectory'   => __DIR__ . '/../controllers',
        'viewDirectory'         => __DIR__ . '/../views',
    ],
    'db'    => [
        'connection'    => [
            'dev'   => [
                'dsn'       => 'mysql:host=localhost;dbname=dev-id',
                'user'      => 'root',
                'password'  => 'root',
            ]
        ]
    ]
];