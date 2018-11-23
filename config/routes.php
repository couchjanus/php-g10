<?php

return [
    'contact' => 'ContactController@index',
    'about' => 'AboutController@index',
    'blog' => 'BlogController@index',
    'guest' => 'GuestbookController@index',

    'admin' => 'Admin\DashboardController@index',

    'admin/categories' => 'Admin\CategoryController@index',
    'admin/categories/create' => 'Admin\CategoryController@create',
    'admin/categories/edit/{id}' => 'Admin\CategoryController@edit',
    'admin/categories/delete/{id}' => 'Admin\CategoryController@delete',


    'admin/posts' => 'Admin\PostController@index',
    'admin/posts/create' => 'Admin\PostController@create',
    'admin/posts/edit/{id}' => 'Admin\PostController@edit',
    'admin/posts/delete/{id}'=> 'Admin\PostController@delete',
    'admin/posts/show/{id}'=> 'Admin\PostController@show',

    'admin/products' => 'Admin\ProductController@index',
    'admin/products/create' => 'Admin\ProductController@create',
    'admin/products/edit/{id}' => 'Admin\ProductController@edit',
    'admin/products/delete/{id}'=> 'Admin\ProductController@delete',
    'admin/products/show/{id}'=> 'Admin\ProductController@show',
    
    //Главаня страница
    'index.php' => 'HomeController@index',
    '' => 'HomeController@index',
    ];
