<?php
// HomeController.php
// namespace App\controllers;

// use App\core\Controller;

class HomeController
{
    // Class properties and methods go here   
    public function __construct()
    {
        render('home/index', ['title'=>'<b>Our Cats</b> Members']);
        // \App\render('home/index', ['title'=>'<b>Our Cats</b> Members']);
    }

    // public function index()
    // {
    //     $title = 'Our <b>Best Cat Members</b>';

    //     render('home/index', ['title'=>$title]);
    // }
}

// class HomeController extends Controller
// {
  
//     public function index()
//     {  
//         $title = 'Our <b>Cat Members</b>';
//         $this->_view->render('home/index', ['title'=>$title]);
//     }
// }
