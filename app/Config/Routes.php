<?php

use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;


$routes->setAutoRoute(true);
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('/shop', 'Shop::index');
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);
