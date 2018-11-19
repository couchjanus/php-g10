<?php

// pdo.create.table.categories.php

// PDO MySQL connection
$params = [
    'host' => 'localhost',
    'user' => 'root',
    'pwd'  => 'ghbdtn',
    'db' => "store"
];

// подключаемся к базе данных
try {
    $dsn  = sprintf('mysql:charset=utf8mb4;collate:utf8mb4_unicode_ci;host=%s;dbname=%s', $params['host'], $params['db']);
    
    $pdo  = new PDO($dsn, $params['user'], $params['pwd']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table
    $sql = "DROP TABLE IF EXISTS categories;
           CREATE TABLE categories (
              id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              PRIMARY KEY(id),
              name VARCHAR(20) NOT NULL,
              status TINYINT(1) UNSIGNED DEFAULT 1 NOT NULL
        )";
    
    $pdo->exec($sql);
    echo "Table categorits created successfully\n\n";
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
