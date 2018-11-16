<?php
// class.07.test.php
// Объявление пространства имен
namespace App;

class MyClass
{
    // Class properties and methods go here 
    public function __construct()
    {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }  

    public $prop1 = "I'm a class property!";
    
    public $prop2 = "I'm a public property!";
    protected $prop3 = "I'm a protected property!";
    
    // объявление свойства
    private $_var = "I'm a private property!"; // значение по умолчанию
    
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    public function getProperty()
    {
        return $this->prop1 ;
    }

    public function displayVar()
    {
        echo $this->_var;
    }

}

$instance = new \App\MyClass;
echo $instance->prop1; // Output the property
echo "\n\n";
var_dump($instance->prop1);

echo $instance->getProperty(); // Get the property value
 
$instance->setProperty("I'm a new property value!"); // Set a new one
 
echo $instance->getProperty(); // Read it out again to show the change
echo "End of file.\n>";