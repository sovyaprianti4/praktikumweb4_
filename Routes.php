<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Page::index');

$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

$routes->match(['get','post'], 'user/login', 'User::login');
$routes->get('user/logout', 'User::logout');

/*
|--------------------------------------------------------------------------
| ARTIKEL USER
|--------------------------------------------------------------------------
*/

$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

/*
|--------------------------------------------------------------------------
| ADMIN (Harus Login)
|--------------------------------------------------------------------------
*/

$routes->group('admin', ['filter' => 'auth'], function($routes){

    $routes->get('artikel', 'Artikel::admin_index');

    $routes->get('artikel/add', 'Artikel::add');
    $routes->post('artikel/save', 'Artikel::save');

    $routes->get('artikel/edit/(:num)', 'Artikel::edit/$1');
    $routes->post('artikel/update/(:num)', 'Artikel::update/$1');

    $routes->get('artikel/delete/(:num)', 'Artikel::delete/$1');

});