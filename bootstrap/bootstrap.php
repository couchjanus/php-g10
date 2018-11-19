<?php
// namespace App;
// Общие настройки

// Устанавливаем временную зону по умолчанию

if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set('Europe/Kiev');    
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Ошибки и протоколирование
error_reporting(E_ALL | E_NOTICE | E_STRICT | E_DEPRECATED);

require_once realpath(__DIR__).'/../config/app.php';
require_once CORE.'Connection.php';
// $conn = new Connection(require_once DB_CONFIG_FILE);

// $conn = Connection::dbFactory(require_once DB_CONFIG_FILE);

// if (!$conn) {
//     echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
//     exit;
// }

// echo "Соединение с MySQL установлено!" . PHP_EOL;
require_once CORE.'View.php';
require_once CORE.'Controller.php';
require_once CORE.'Router.php';
