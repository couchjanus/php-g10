<?php
/**
 * Контроллер для управления категориями
 */

require_once realpath(MODELS.'Category.php');

class CategoryController extends Controller
{
    /**
     * Главная страница управления категориями
     *
     * @return bool
     */
    public function index()
    {
        $categories = Category::index();
        $data['categories'] = $categories;
        $data['title'] = 'Admin Category List Page ';
        $this->_view->render('admin/categories/index', $data);
    }

    /**
     * Добавление категории
     *
     * @return bool
     */
    public function create()
    {
        if (isset($_POST) and !empty($_POST)) {
            $opts = [];
            $name = trim(strip_tags($_POST['name']));
            array_push($opts, $name);
            $status = $_POST['status'];
            array_push($opts, $status);
            Category::store($opts);
            header('Location: /admin/categories');
        }

        $data['title'] = 'Admin Category Add New Category ';
        $this->_view->render('admin/categories/create', $data);
    }

    // 
    public function edit($vars)
    {
        extract($vars);
        $category = Category::getCategoryById($id);
        //Принимаем данные из формы
        if (isset($_POST) and !empty($_POST)) {
            $options['name'] = trim(strip_tags($_POST['name']));
            $options['status'] = $_POST['status'];
            $options['id'] = $id;
            Category::update($id, $options);
            header('Location: /admin/categories');
        }
        $data['category'] = $category;
        $data['title'] = 'Admin Category Edit Page ';
        $this->_view->render('admin/categories/edit', $data);
    }

    public function delete($vars)
    {
        extract($vars);
        if (isset($_POST['submit'])) {
            Category::destroy($id);
            $this->redirect('/admin/categories');
        } elseif (isset($_POST['reset'])) {
            $this->redirect('/admin/categories');            
        }
        $data['title'] = 'Admin Delete Category ';
        $data['category'] = Category::getCategoryById($id);
        $this->_view->render('admin/categories/delete', $data);
    }

}
