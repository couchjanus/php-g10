<?php

return [
    'contact' => 'ContactController@index',
    'about' => 'AboutController@index',
    'blog' => 'BlogController@index',
    'guest' => 'GuestbookController@index',
    'admin' => 'Admin\DashboardController@index',
    'admin/categories' => 'Admin\CategoryController@index',
    'admin/categories/create' => 'Admin\CategoryController@create',

    'admin/posts' => 'Admin\PostsController@index',
    'admin/posts/create' => 'Admin\PostsController@create',

    'admin/products' => 'Admin\ProductsController@index',
    'admin/products/create' => 'Admin\ProductsController@create',

    //Главаня страница
    'index.php' => 'HomeController@index',
    '' => 'HomeController@index',
    ];
