<?php

return [
    'database' => [
        'name' => 'conference',
        'connection' => 'mysql:host=127.0.0.1',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];