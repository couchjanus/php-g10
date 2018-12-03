<?php
/**
 * Class ProfileController
 * Контроллер для работы с личным кабинетом
*/
require_once realpath(MODELS.'User.php');

class ProfileController extends Controller
{

    private $userId;
    private $user;

    public function __construct()
    {
        parent::__construct();
        //Получаем id пользователя из сессии
        $this->userId = User::checkLog();
        //Получаем всю информацию о пользователе из БД
        $this->user = User::getUserById($this->userId);
    }
  
    /**
      * Основная страница личного кабинета
      *
      * @return bool
    */
    public function index()
    {

        $data['title'] = 'Личный кабинет ';
        $data['subtitle'] = 'Edit Your Private Things ';
        $data['user'] = $this->user;

        if ($data['user']['role_id']===1) {
            $this->_view->render('admin/index', $data);   
        } else {
            $this->_view->render('profile/index', $data);
        }
    }

    /**
     * Редактирование профиля
     *
     * @return bool
    */
    public function edit()
    {
        $res = false;
        //Флаг ошибок
        $errors = false;

        if (isset($_POST) and (!empty($_POST))) {
            
            $options['name'] = trim(strip_tags($_POST['name']));
            $options['phone_number'] = trim(strip_tags($_POST['phone_number']));
            $options['first_name'] = trim(strip_tags($_POST['first_name']));
            $options['last_name'] = trim(strip_tags($_POST['last_name']));

            // Валидация полей
            if (!User::checkName($options['name'])) {
                $errors[] = "Имя не может быть короче 2-х символов";
            }

            if ($errors == false) {
                $res = User::updateProfile($this->userId, $options);
            }
        }

        $data['title'] = 'Личный кабинет ';
        $data['res'] = $res;
        $data['user'] = $this->user;
        $data['errors'] = $errors;
                    
        $this->_view->render('profile/edit', $data);
    }
        
}
