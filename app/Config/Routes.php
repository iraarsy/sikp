<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->match(['get', 'post'], '/', 'Users::index', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'register', 'Users::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'lupapass', 'Users::lupapass', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'profile', 'Users::profile', ['filter' => 'auth']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/komoditas', 'Komoditas::index', ['filter' => 'auth']);
$routes->get('/infrasternak', 'Infrasternak::index', ['filter' => 'auth']);
$routes->get('/infrastruktur', 'Infrastruktur::index', ['filter' => 'auth']);
$routes->get('/perikanan', 'Perikanan::index', ['filter' => 'auth']);
$routes->get('/peternakan', 'Peternakan::index', ['filter' => 'auth']);
$routes->get('/produsen', 'Produsen::index', ['filter' => 'auth']);
$routes->get('/tanaman', 'Tanaman::index', ['filter' => 'auth']);
$routes->get('/tempatprod', 'Tempatprod::index', ['filter' => 'auth']);

$routes->post('/tanaman/save', 'Tanaman::save');
$routes->post('/infrasternak/save', 'Infrasternak::save');
$routes->post('/perikanan/save', 'Perikanan::save');
$routes->post('/komoditas/update/(:num)', 'Komoditas::update/$1');
$routes->delete('/tanaman/(:num)', 'Tanaman::hapus/$1');

// API
$routes->resource('api/tempat', ['controller' => 'Api\Tempat']);
$routes->resource('api/infrasternak', ['controller' => 'Api\InfrasTernak']);
$routes->resource('api/produsen', ['controller' => 'Api\Produsen']);
$routes->resource('api/infrastruktur', ['controller' => 'Api\infrastruktur']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
