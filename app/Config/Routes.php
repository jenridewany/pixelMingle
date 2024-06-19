<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/brand', 'Home::brand');
$routes->get('/career', 'Home::career');
$routes->get('/contact', 'Home::contact');
$routes->get('/couple-session', 'Home::coupleSession');
$routes->get('/private-session', 'Home::privateSession');
$routes->get('/register', 'Home::register');
