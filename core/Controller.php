<?php
// namespace App\core;

class Controller {

    protected $_view;

    function __construct()
    {
        $this->_view = new View();

    }

}
