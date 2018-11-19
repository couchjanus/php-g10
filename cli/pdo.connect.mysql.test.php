<?php

// pdo.connect.mysql.test.php

// Увидеть список доступных драйверов можно так:
print_r(PDO::getAvailableDrivers());

/**
 * Увидеть список доступных драйверов:
 *   php cli/pdo.connect.mysql.test.php
 *   Array
 *       [0] => mysql
 *       [1] => pgsql
 *       [2] => sqlite
 *   )
*/

// example of PDO MySQL connection

$host = "localhost";
$user = "root";
$pass = "ghbdtn";
$dbname = "store";

// Create connection
try {
    // MS SQL Server и Sybase через PDO_DBLIB
    // $DBH = new PDO("mssql:host=$host;dbname=$dbname", $user, $pass);
    // $DBH = new PDO("sybase:host=$host;dbname=$dbname", $user, $pass);

    // MySQL через PDO_MYSQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    echo "Connected successfully\n\n". PHP_EOL;

    // SQLite
    // $DBH = new PDO("sqlite:my/database/path/database.db");
}
catch(PDOException $e) {
    // echo $e->getMessage();
    printf("Не удалось подключиться: %s\n", $e->getMessage()). PHP_EOL;
    // Не удалось подключиться: SQLSTATE[HY000] [1045] Access denied for user 'dev'@'localhost' (using password: YES)
}
