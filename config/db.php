<?php

return [
    'host'=>'MySQL-8.2',
    'dbname'=>'blog',
    'username'=>'root',
    'password'=> '',
    'charset'=>'utf8',   // utf8mb4
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
       // PDO::ERRMODE_EXCEPTION => PDO::ERRMODE_EXCEPTION
    ]
];