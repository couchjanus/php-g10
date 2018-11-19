<?php
// HomeController.php

class HomeController extends Controller
{
    protected $title;
  
    public function index()
    {  
        $title = 'Our <b>Cat Members</b>';
        $posts = [];
        $this->_view->render('home/index', ['title'=>$title, 'posts'=>$posts]);
    }

    public function title($title)
    {  
        $this->title = $title || 'Our <b>Cats Home</b>';
        return $this->title;
    }
}
