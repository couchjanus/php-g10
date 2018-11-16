<?php
// namespace App\core;

class View {

    public function render($path, $data = [], $error = false)
    {
        extract($data);
        return require VIEWS."/{$path}.php";
    }

}
