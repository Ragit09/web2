<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'home::search');
$routes->get('/chart', 'home::chart');
$routes->get('/checkout', 'home::checkout');
$routes->get('/submit', 'home::submit');

