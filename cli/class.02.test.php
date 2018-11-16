<?php
// class.02.test.php
// Объявление пространства имен
namespace App; // объявление пространства имен должно быть первым выражением в скрипте

class MyClass
{
  
  // Class properties and methods go here   

}

// Если имя находится в пространстве имен,
// то оно должно быть задано полностью.

$obj = new \App\MyClass;
// Чтобы увидеть содержимое класса, используйте var_dump()
var_dump($obj);