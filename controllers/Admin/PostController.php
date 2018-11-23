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

    public function create()
    {
        //Принимаем данные из формы
        if (isset($_POST) and !empty($_POST)) {
            $parameters = [];
            $parameters['title'] = trim(strip_tags($_POST['title']));
            $parameters['content'] = trim($_POST['content']);
            $parameters['status'] = $_POST['status'];
            Post::store($parameters);
            header('Location: /admin/posts');
        }
        $data['title'] = 'Admin Add Post ';
        $this->_view->render('admin/posts/create', $data);
    }
}
