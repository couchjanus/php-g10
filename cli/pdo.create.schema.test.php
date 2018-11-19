<?php

// pdo.create.database.test.php

// example of PDO MySQL connection
$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd'  => 'ghbdtn',
];

// подключаемся к базе данных
try {
    $dsn  = sprintf('mysql:charset=utf8mb4;collate:utf8mb4_unicode_ci;host=%s;', $params['host']);
    
    $pdo  = new PDO($dsn, $params['user'], $params['pwd']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //  Schema store
    $sql = "DROP SCHEMA IF EXISTS store; CREATE SCHEMA store CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";

    $pdo->exec($sql);
    echo "SCHEMA created successfully\n\n";
}
catch(PDOException $e) {
    error_log($e->getMessage());
    file_put_contents('PDOErrors.log', $e->getMessage(), FILE_APPEND);
} catch (Throwable $e) {
    error_log($e->getMessage());
}
finally {
    $pdo = null;
}
