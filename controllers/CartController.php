<?php

/**
 * Контроллер для работы с корзиной
 */

require_once realpath(MODELS.'Order.php');
require_once realpath(MODELS.'User.php');

class CartController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        //Получаем id пользователя из сессии
        $userId = User::checkLog();

        //Получаем всю информацию о пользователе из БД
        $user = User::getUserById($userId);
        $productsInCart = $_POST['val'];
        
        $options = array();
        parse_str($_POST['user_props'], $options);
        
        User::updateProfile($userId, $options);

        $res = Order::save($userId, $productsInCart);
        echo json_encode($options);
    }

}
