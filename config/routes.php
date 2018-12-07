<?php
$router->get('', 'HomeController@index');
$router->get('about', 'AboutController@index');
$router->get('contact', 'ContactController@index');
$router->get('guestbook', 'GuestbookController@index');

$router->get('blog/page-{page}', 'BlogController@index');
$router->get('blog', 'BlogController@index');
$router->post('blog/search', 'BlogController@search');

$router->get('blog/{slug}', 'BlogController@show');
$router->get('404', 'PagesController@notFound');

$router->get('admin', 'Admin\DashboardController@index');
$router->get('admin/products', 'Admin\ProductController@index');
$router->get('admin/products/create', 'Admin\ProductController@create');
$router->post('admin/products/save', 'Admin\ProductController@save');
$router->get('admin/products/edit/{id}', 'Admin\ProductController@edit');
$router->post('admin/products/edit/{id}', 'Admin\ProductController@edit');

$router->get('admin/products/delete/{id}', 'Admin\ProductController@delete');
$router->post('admin/products/delete/{id}', 'Admin\ProductController@delete');

$router->get('admin/products/show/{id}', 'Admin\ProductController@show');


$router->get('admin/categories', 'Admin\CategoryController@index');
$router->get('admin/categories/create', 'Admin\CategoryController@create');
$router->post('admin/categories/create', 'Admin\CategoryController@create');
$router->get('admin/categories/edit/{id}', 'Admin\CategoryController@edit');
$router->post('admin/categories/edit/{id}', 'Admin\CategoryController@edit');
$router->get('admin/categories/delete/{id}', 'Admin\CategoryController@delete');
$router->post('admin/categories/delete/{id}', 'Admin\CategoryController@delete');

$router->get('admin/posts', 'Admin\PostController@index');
$router->get('admin/posts/create', 'Admin\PostController@create');
$router->get('admin/posts/edit/{id}', 'Admin\PostController@edit');
$router->get('admin/posts/delete/{id}', 'Admin\PostController@delete');

$router->post('admin/posts/create', 'Admin\PostController@store');
$router->post('admin/posts/update/{id}', 'Admin\PostController@update');
$router->post('admin/posts/delete/{id}', 'Admin\PostController@delete');

$router->get('api/shop', 'HomeController@getProduct');

$router->get('admin/roles', 'Admin\RolesController@index');
$router->get('admin/roles/create', 'Admin\RolesController@create');
$router->get('admin/roles/edit/{id}', 'Admin\RolesController@edit');
$router->get('admin/roles/delete/{id}', 'Admin\RolesController@delete');

$router->post('admin/roles/create', 'Admin\RolesController@create');
$router->post('admin/roles/edit/{id}', 'Admin\RolesController@edit');
$router->post('admin/roles/delete/{id}', 'Admin\RolesController@delete');

$router->get('admin/users', 'Admin\UsersController@index');
$router->get('admin/users/create', 'Admin\UsersController@create');
$router->post('admin/users/create', 'Admin\UsersController@create');

$router->get('admin/users/edit/{id}', 'Admin\UsersController@edit');
$router->post('admin/users/edit/{id}', 'Admin\UsersController@edit');

$router->get('admin/users/delete/{id}', 'Admin\UsersController@delete');
$router->post('admin/users/delete/{id}', 'Admin\UsersController@delete');

$router->get('register', 'UsersController@signup');
$router->post('register', 'UsersController@signup');

$router->get('login', 'UsersController@login');
$router->post('login', 'UsersController@login');

$router->get('logout', 'UsersController@logout');
$router->post('logout', 'UsersController@logout');

$router->get('admin/permissions', 'Admin\PermissionsController@index');
$router->get('admin/permissions/create', 'Admin\PermissionsController@create');
$router->get('admin/permissions/edit/{id}', 'Admin\PermissionsController@edit');
$router->get('admin/permissions/delete/{id}', 'Admin\PermissionsController@delete');

$router->post('admin/permissions/create', 'Admin\PermissionsController@create');
$router->post('admin/permissions/edit/{id}', 'Admin\PermissionsController@edit');
$router->post('admin/permissions/delete/{id}', 'Admin\PermissionsController@delete');

$router->get('admin/orders', 'Admin\OrdersController@index');
$router->get('admin/orders/edit/{id}', 'Admin\OrdersController@edit');
$router->get('admin/orders/delete/{id}', 'Admin\OrdersController@delete');

$router->post('admin/orders/edit/{id}', 'Admin\OrdersController@edit');
$router->post('admin/orders/delete/{id}', 'Admin\OrdersController@delete');

$router->get('admin/orders/view/{id}', 'Admin\OrdersController@view');


$router->post('check', 'UsersController@actionCheck');
$router->post('cart', 'CartController@index');

$router->get('profile', 'ProfileController@index');
$router->get('profile/edit', 'ProfileController@edit');
$router->get('profile/orders', 'ProfileController@ordersList');

$router->get('profile/orders/view/{id}', 'ProfileController@ordersView');
$router->get('profile/orders/edit/{id}', 'ProfileController@ordersEdit');
$router->get('profile/orders/delete/{id}', 'ProfileController@ordersDelete');

$router->post('profile/edit', 'ProfileController@edit');

