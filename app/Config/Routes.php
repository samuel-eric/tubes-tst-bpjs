<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/daftar', 'DaftarController::index');
$routes->get('/peserta/(:num)', 'PesertaBpjsAPI::index/$1');