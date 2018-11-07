<?php

// require_once realpath(__DIR__).'/../bootstrap/bootstrap.php'; 

// вернет текущее значение уровня протоколирования ошибок 22527
echo error_reporting();

echo ini_get('display_errors');

// Установка значения настройки конфигурации
ini_set('display_errors', 1);

echo "<br>display_errors: ", ini_get('display_errors');

echo "<h2>Get display errors</h2>";

echo ini_get('display_errors');
  
echo "<h2>Set display errors</h2>";

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}   

echo ini_get('display_errors');

echo "<h2>Set error_reporting</h2>";
ini_set('error_reporting', E_ALL);
// вернет текущее значение уровня протоколирования ошибок 22527
echo error_reporting();
echo "<h2>значение по умолчанию error_reporting</h2>";
// значение по умолчанию равно E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED. 

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
echo error_reporting();
// Примеры использования error_reporting()

// Выключение протоколирования ошибок
error_reporting(0);

// Включать в отчет простые описания ошибок
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Включать в отчет E_NOTICE сообщения (добавятся сообщения о 
// непроинициализированных переменных или ошибках в именах переменных)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Добавлять сообщения обо всех ошибках, кроме E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Добавлять в отчет все ошибки PHP
error_reporting(E_ALL);

echo "<h3>Добавлять в отчет все ошибки PHP</h3>";
// Добавлять в отчет все ошибки PHP
error_reporting(-1);
echo error_reporting();

// То же, что и error_reporting(E_ALL);
// вернет текущее значение уровня протоколирования ошибок 22527

ini_set('error_reporting', E_ALL);
echo "<br>", error_reporting();

echo "<h3>Добавлять в отчет все ошибки PHP</h3>";
ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT | E_DEPRECATED);

echo "<h3>Добавлять в отчет ошибки E_STRICT</h3>";
ini_set('error_reporting', E_ALL |  E_STRICT);


echo error_reporting();

echo "<h3>include_path</h3>";
echo ini_get('include_path'); // .:/usr/share/php


// set_include_path('/usr/lib/pear');

// // Или так
// ini_set('include_path', '/usr/lib/pear');

echo '<h3>DIRECTORY_SEPARATOR (string)</h3>';
echo DIRECTORY_SEPARATOR;
echo '<h3>PATH_SEPARATOR (string)</h3>';
echo PATH_SEPARATOR;
echo '<h3>SCANDIR_SORT_ASCENDING (integer)</h3>';
echo SCANDIR_SORT_ASCENDING;   
echo '<h3>SCANDIR_SORT_DESCENDING (integer)</h3>';
echo SCANDIR_SORT_DESCENDING;   
echo '<h3>SCANDIR_SORT_NONE (integer)</h3>';
echo SCANDIR_SORT_NONE;


// $path = '/usr/lib/pear';
// set_include_path(get_include_path() . PATH_SEPARATOR . $path);

// Получение временной зоны по умолчанию

echo "<h2>Get date default timezone</h2>";

echo date_default_timezone_get();

// Получение временной зоны по умолчанию

echo "<h2>Get date timezone from php.ini</h2>";

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone');
}

// Получение временной зоны по умолчанию

echo "<h2>Set date default timezone</h2>";

date_default_timezone_set('Europe/Kiev');

if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}



