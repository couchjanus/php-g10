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

// $uri = getURI();

    switch (getURI()) {
        case '':
            # code...
            require_once CONTROLLERS.'HomeController.php';
            break;
        case 'about':
            # code...
            require_once CONTROLLERS.'AboutController.php';
            break;
        case 'contact':
            # code...
            require_once CONTROLLERS.'ContactController.php';
            break;
        case 'blog':
            # code...
            require_once CONTROLLERS.'BlogController.php';
            break;
        default:
            # code...
            require_once VIEWS.'errors/404.php';
    }
