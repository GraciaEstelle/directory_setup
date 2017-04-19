<?php

return [
    'database' =>[
        'connection' => 'mysql:host=localhost',
        'dbname' => 'shop',
        'user' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];