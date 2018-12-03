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
require_once CORE.'Session.php';

require_once CORE.'Connection.php';

require_once CORE.'Request.php';
require_once CORE.'Slug.php';
require_once CORE.'Model.php';
require_once CORE.'View.php';
require_once CORE.'Controller.php';
require_once CORE.'Router.php';

// ini_set("session.use_strict_mode", 1);
// ini_set("session.cookie_httponly", 1);

// print_r(ini_get("session.use_strict_mode"));

// Автоматическая вставка SID в ссылки.
// ini_set("session.use_trans_sid", true);

// Запускаем сессию
// session_start();
Session::init();

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

// print_r(ini_get("session.cookie_lifetime"));

// print_r(ini_get("session.use_cookies"));

// print_r(ini_get("session.use_only_cookies"));

// print_r(ini_get("session.use_strict_mode"));
// echo '<br>';
// print_r(ini_get("session.cookie_httponly"));

// echo '<br>';
// print_r(ini_get("session.cookie_secure"));
// echo '<br>';
// print_r(ini_get("session.cache_limiter"));

// сохраняем всё что есть в буфере в переменную $content
// $content = ob_get_contents();





// отключаем и очищаем буфер
// ob_end_clean();

// var_dump($content);

// сохраняем всё что есть в буфере в переменную

// выводим информацию
// echo "Hello ";
// $a = ob_get_contents();

// повторный вызов
// echo " world ";

// теперь буфер содержит `hello world `

// $b = ob_get_contents();

// Если вы стартанули буфер вывода, но по какой-то причине не закрыли его, то PHP это сделает за вас и в конце работы скрипта выполнит «сброс» буфера вывода в браузер пользователя

// Если внутри блока ob_start – ob_end вы отправляете заголовок, то он не попадает в буфер, а сразу будет отправлен в браузер:

// header("OB-START: 1");

ob_start();
 
// echo "Never saw";

// header("PHP-VERSION: ". PHP_VERSION);
 
// ob_end_clean();

// header("OB-END: 1");

// phpinfo();

Router::load(CONFIG.'routes.php')
    ->directPath(Request::uri(), Request::method());
