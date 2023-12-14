<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/daftar', 'DaftarController::index');
$routes->post('/daftar_action', 'DaftarController::daftar_action');
$routes->get('/login', 'LoginController::index');
$routes->post('/login_action', 'LoginController::login_action');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/peserta', 'PesertaController::index');
$routes->get('/api/(:segment)/(:segment)/peserta/(:num)', 'PesertaBpjsAPI::index/$1/$2/$3');
$routes->get('/iuran', 'IuranController::index');
$routes->get('/bayar_iuran', 'IuranController::bayar_iuran');
$routes->post('/bayar_iuran_action', 'IuranController::bayar_iuran_action');