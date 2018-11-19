<?php
// ContactController.php

class ContactController extends Controller
{
    // Class properties and methods go here   
    public function index()
    {
        $title = 'Contact <b>Our Cats</b>';
        
        $this->_view->render('home/contact', ['title'=>$title]);
        
    }

}
