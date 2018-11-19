<?php

class Controller {

    protected $_view;
    protected $_pdo;

    function __construct()
    {
        $this->_view = new View();
        $this->_pdo = Connection::dbFactory(include_once DB_CONFIG_FILE);
    }

}
