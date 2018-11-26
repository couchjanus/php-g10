<?php

require_once realpath(MODELS.'Post.php');

class BlogController extends Controller
{
    public function index()
    {
        $data['posts'] = Post::selectAll();
        $data['title'] = 'Blog Post Page';
        $this->_view->render('blog/index', $data);
    }

    public function show($vars)
    {
        extract($vars);
        $data['post'] = Post::getPostBySlug($slug);
        $this->_view->render('blog/show', $data);
    }
}
