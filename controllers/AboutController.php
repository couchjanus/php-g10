<?php
// AboutController.php
// namespace App\controllers;

// use App\core\Controller;

class AboutController
{
    // Class properties and methods go here   
    public function __construct()
    {
        render('home/about', ['title'=>'About <b>Our Cats</b>']);
        // \App\render('home/about', ['title'=>'About <b>Our Cats</b>']);
    }

}

// class AboutController extends Controller
// {
//     public function index()
//     {
//         $title = 'SHOPAHOLIC <b>ABOUT PAGE</b>';
        
//         $this->_view->render('home/about', ['title'=>$title]);
//     }
// }
