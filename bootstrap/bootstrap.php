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

// Запускаем сессию
session_start();

// session_name() возвращает имя текущей сессии
// print_r(session_name());

// $_SESSION['time'] = date("H:i:s");
// echo $_SESSION['time'];

// if (!isset($_SESSION['time'])) {
//     $_SESSION['time'] = date("H:i:s");
// }
// echo $_SESSION['time'];

// выводим информацию
// этот, и весь последующий вывод, будет попадать в буфер вывода

// print_r(session_save_path());

// print_r(sys_get_temp_dir());

// print_r(session_id());

require_once realpath(__DIR__).'/../config/app.php';
require_once CORE.'Connection.php';

require_once CORE.'Request.php';
require_once CORE.'Slug.php';
require_once CORE.'Model.php';
require_once CORE.'View.php';
require_once CORE.'Controller.php';
require_once CORE.'Router.php';

Router::load(CONFIG.'routes.php')
    ->directPath(Request::uri(), Request::method());
