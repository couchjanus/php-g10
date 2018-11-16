<?php
// class.04.test.php
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
echo $instance->prop1; // Output the property
echo "\n\n";
var_dump($instance->prop1);
