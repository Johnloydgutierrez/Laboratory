<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::index');
$routes->get('/login', 'UserController::login');
$routes->get('/register', 'UserController::register');
$routes->post('/authreg', 'UserController::authreg');
$routes->post('/authlogin', 'UserController::authlogin');
$routes->get('/product', 'ProductController::viewAll');
$routes->get('/product/add', 'ProductController::addForm');
$routes->post('/product/add', 'ProductController::add');
$routes->get('/product/edit/(:num)', 'ProductController::editForm/$1');
$routes->post('/product/edit/(:num)', 'ProductController::edit/$1');
$routes->get('/product/delete/(:num)', 'ProductController::delete/$1');
$routes->post('/logout', 'ProductController::logout');
$routes->get('/website', 'ProductController::website');



