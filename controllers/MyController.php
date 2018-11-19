<?php
// MyController.php

class MyController
{
    protected $title;
  
    public function myTitle($title)
    {  
        $this->title = $title? $title : 'Our <b>Cats Home</b>';
        return $this->title;
    }
}
