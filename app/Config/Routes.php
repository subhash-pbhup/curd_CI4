<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/view', 'Admin::view');
$routes->add('/admin/save', 'Admin::save');
$routes->get('admin/delete/(:num)', 'Admin::delete/$1');

