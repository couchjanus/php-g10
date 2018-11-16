<?php
// class.03.test.php
// Объявление пространства имен
namespace App;

class MyClass
{
    // Class properties and methods go here   

    public $prop1 = "I'm a class property!";
    public $prop2 = "I'm a public property!";
    protected $prop3 = "I'm a protected property!";
    private $_prop4 = "I'm a private property!";
}

$instance = new \App\MyClass;
var_dump($instance);
