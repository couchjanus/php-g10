<?php

class Router
{

   protected $routes = [];

   public function define($routes)
   {
       $this->routes = $routes;
   }

   public static function load()
   {
       $router = new static();
       return $router;
   }

//    public static function load($file)
//    {
//        $router = new static;
//        require $file;
//        return $router;
//    }

}
