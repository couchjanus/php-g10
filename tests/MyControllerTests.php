<?php
use PHPUnit\Framework\TestCase;
require realpath(__DIR__.'/../controllers/MyController.php');

class MyControllerTests extends TestCase
{
    private $item;
 
    protected function setUp()
    {
        $this->item = new MyController();
    }
 
    protected function tearDown()
    {
        $this->item = NULL;
    }
 
    public function testMyTitle()
    {
        $result = $this->item->myTitle('Cats Home');
        $this->assertEquals('Cats Home', $result);
    }
 
}