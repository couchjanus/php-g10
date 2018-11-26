<?php

require_once realpath(MODELS.'Post.php');

class PostController extends Controller
{
    public function index()
    {
        $data['posts'] = Post::selectAll();
        $data['title'] = 'Admin Posts Page';
        $this->_view->render('admin/posts/index', $data);
    }

    // public function create()
    // {
    //     //Принимаем данные из формы
    //     if (isset($_POST) and !empty($_POST)) {
    //         $parameters = [];
    //         $parameters['title'] = trim(strip_tags($_POST['title']));
    //         $parameters['content'] = trim($_POST['content']);
    //         $parameters['status'] = $_POST['status'];
    //         Post::store($parameters);
    //         header('Location: /admin/posts');
    //     }
    //     $data['title'] = 'Admin Add Post ';
    //     $this->_view->render('admin/posts/create', $data);
    // }
    
    public function create()
    {
      $data['title'] = 'Admin Add Post ';
      $this->_view->render('admin/posts/create', $data);
    }

    public function store()
    {
        $opts['title'] = trim(strip_tags($_POST['title']));
        $opts['content'] = trim($_POST['content']);
        $opts['status'] = $_POST['status'];
        Post::store($opts);
        $this->redirect('/admin/posts');
    }

    public function edit($vars)
    {
        extract($vars);
        $data['title'] = 'Admin Edit Post ';
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/edit', $data);
    }

    public function update($vars)
    {
        extract($vars);
        $options['title'] = trim(strip_tags($_POST['title']));
        $options['content'] = trim($_POST['content']);
        $options['status'] = trim(strip_tags($_POST['status']));
        Post::update($id, $options);
        $this->redirect('/admin/posts');
    }

    public function delete($vars)
    {
        extract($vars);
        if (isset($_POST['submit'])) {

            Post::destroy($id);
            $this->redirect('/admin/posts');
          
        } elseif (isset($_POST['reset'])) {
            $this->redirect('/admin/posts');            
        }

        $data['title'] = 'Admin Delete Post ';
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/delete', $data);
    }

    public function show($vars)
    {
        extract($vars);
        // var_dump($id);
        $data['title'] = 'Admin Show Post ';
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/show', $data);

    }
}
