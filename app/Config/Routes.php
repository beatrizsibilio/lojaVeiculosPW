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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::page');
$routes->get('home', 'Home::page');
$routes->match(['get', 'post'], 'cadastro', 'Home::cadastro');
$routes->match(['get', 'post'], 'usuario', 'Home::usuario');
$routes->match(['get', 'post'], 'loginPessoa', 'Home::loginPessoa');
$routes->match(['get', 'post'], 'pessoaCadastrada', 'Home::pessoaCadastrada');
$routes->match(['get', 'post'], 'excluir/(:num)', 'Home::excluir/$1');
$routes->match(['get', 'post'], 'editar/(:num)', 'Home::editar/$1');
$routes->match(['get', 'post'], 'create', 'Home::create');
$routes->match(['get', 'post'], 'editar/create', 'Home::create');
$routes->get('veiculo', 'Home::veiculo');
$routes->get('(:any)', 'Home::page/$1');

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
