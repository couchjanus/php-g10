<?php
// ContactController.php
// namespace App\controllers;

// use App\core\Controller;

class ContactController
{
    // Class properties and methods go here   
    public function __construct()
    {
        render('home/contact', ['title'=>'Contact <b>Our Cats</b>']);
        // \App\render('home/contact', ['title'=>'Contact <b>Our Cats</b>']);
    }

}
