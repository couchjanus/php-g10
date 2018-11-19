<?php
/**
 * Данные для подключения к БД
*/

$host = 'localhost';
$db   = 'store';
$user = 'root';
$password = 'ghbdtn';
$charset = 'utf8mb4';

return [
        'db' => [
            'driver' => 'mysql',
            'dbname' => $db,
            'host'    => $host,
            'charset' => $charset,
        ],
        'user' => $user,
        'password' => $password,
        'errmode' => PDO::ERRMODE_EXCEPTION,
        'options' => [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
];
