<?php
class App
{
    protected $result = null;

    public function __construct()
    {
        // включаем буфер
        ob_start();
        // Запускаем сессию
        Session::init();
    }

    public function init()
    {
        Router::load(CONFIG.'routes.php')->directPath(Request::uri(), Request::method());
    }

}
