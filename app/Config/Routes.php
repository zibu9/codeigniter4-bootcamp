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

$routes->add('product/(:any)/(:any)', 'Shop::product/$1/$2');

//routes whith anonyme functions

$routes->add('blog', function (){
    return "<h1>this is the blog</h1>";
});


//route group

$routes->group('admin', function ($routes){
    $routes->get('users', 'User::allUsers');
});
