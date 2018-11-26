<?php
$router->define(
    [
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
    ]
);
// $router->get('', 'HomeController@index');
// $router->get('about', 'AboutController@index');
// $router->get('contact', 'ContactController@index');
// $router->get('guestbook', 'GuestbookController@index');
// $router->get('blog', 'BlogController@index');
// $router->get('blog/{slug}', 'BlogController@show');
// $router->get('404', 'PagesController@notFound');

// $router->get('admin', 'Admin\DashboardController@index');
// $router->get('admin/products', 'Admin\ProductController@index');
// $router->get('admin/products/create', 'Admin\ProductController@create');
// $router->post('admin/products/store', 'Admin\ProductController@store');
// $router->get('admin/products/edit/{id}', 'Admin\ProductController@edit');
// $router->post('admin/products/edit/{id}', 'Admin\ProductController@edit');

// $router->get('admin/products/delete/{id}', 'Admin\ProductController@delete');
// $router->post('admin/products/delete/{id}', 'Admin\ProductController@delete');

// $router->get('admin/products/show/{id}', 'Admin\ProductController@show');


// $router->get('admin/categories', 'Admin\CategoryController@index');
// $router->get('admin/categories/create', 'Admin\CategoryController@create');
// $router->post('admin/categories/create', 'Admin\CategoryController@create');
// $router->get('admin/categories/edit/{id}', 'Admin\CategoryController@edit');
// $router->post('admin/categories/edit/{id}', 'Admin\CategoryController@edit');
// $router->get('admin/categories/delete/{id}', 'Admin\CategoryController@delete');
// $router->post('admin/categories/delete/{id}', 'Admin\CategoryController@delete');

// $router->get('admin/posts', 'Admin\PostController@index');
// $router->get('admin/posts/create', 'Admin\PostController@create');
// $router->get('admin/posts/edit/{id}', 'Admin\PostController@edit');
// $router->get('admin/posts/delete/{id}', 'Admin\PostController@delete');

// $router->post('admin/posts/create', 'Admin\PostController@store');
// $router->post('admin/posts/update/{id}', 'Admin\PostController@update');
// $router->post('admin/posts/delete/{id}', 'Admin\PostController@delete');


