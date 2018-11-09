<?php

$routes = [
    'contact' => 'ContactController',
    'about' => 'AboutController',
    'blog' => 'BlogController',
    //Главаня страница
    'index.php' => 'HomeController',
    '' => 'HomeController', 
];

function getURI()
{
    if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI']))
        return trim($_SERVER['REQUEST_URI'], '/');
}

// получаем строку запроса
$uri = getURI();

// Проверить наличие такого запроса в routes

foreach ($routes as $route => $path) {

    //Сравниваем route и $uri
    if ($route === $uri) {
    
        // Определить контроллер
            
        $controllerName = $path;
        
        //Подключаем файл контроллера
        $controllerFile = CONTROLLERS . $controllerName . EXT;
    
        include_once $controllerFile;
        
        $result = true;
        
        if ($result !== null) {
            break;
        }
    }
}
    
if ($result === null) {
    include_once VIEWS.'errors/404'.EXT;
}
