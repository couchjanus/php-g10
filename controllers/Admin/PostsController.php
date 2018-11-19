<?php

require_once realpath(MODELS.'Post.php');

class PostsController extends Controller
{
    public function index()
    {
        $stmt = $this->_pdo->query("SELECT * FROM posts", PDO::FETCH_CLASS, 'Post');
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS);
        $rowCount = $stmt->rowCount();
        $data['rowCount'] = $rowCount;
        $data['posts'] = $posts;
        $data['title'] = 'Admin Posts Page';
        $this->_view->render('admin/posts/index', $data);
    }

    // public function index()
    // {
    //     $data = Post::selectAll();
    //     $data['title'] = 'Admin Posts Page';
    //     $this->_view->render('admin/posts/index', $data);
    // }


    public function create()
    {
        //Принимаем данные из формы
        if (isset($_POST) and !empty($_POST)) {
            $stmt = $this->_pdo->prepare("INSERT INTO posts (title, content, status) VALUES (?, ?, ?)");
            $stmt->bindParam(1, $title);
            $stmt->bindParam(2, $content);
            $stmt->bindParam(3, $status);

            $title = trim(strip_tags($_POST['title']));
            $content = trim($_POST['content']);
            $status = trim(strip_tags($_POST['status']));
            $stmt->execute();
            header('Location: /admin/posts');
        }
        $data['title'] = 'Admin Add Post ';
        $this->_view->render('admin/posts/create', $data);
    }
}
