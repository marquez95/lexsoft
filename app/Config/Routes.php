<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');

$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Login/Login::index');
$routes->post('loginValidate', 'Login/Login::login_post');
$routes->get('salir', 'Login/Login::salir');

//rutas para el administrador
$routes->get('admin', 'admin/Dashboard::index');
$routes->get('/newUser', 'Admin/User::new_user');
$routes->get('edit/(:num)', 'Admin/User::editUser/$1');
$routes->get('/listar', 'Admin/User::listar');
$routes->get('buscar', 'Admin/User::buscar');
$routes->put('update/(:num)', 'Admin/User::update/$1');
$routes->get('deleteUser', 'Admin/User::delete_user');

//rutas para el cliente
$routes->get('inicio', 'cliente/Dashboard::index');
$routes->get('/newCliente', 'cliente/UserCliente::new_user');
$routes->get('/editCliente/(:num)', 'cliente/UserCliente::edit_cliente/$1');
$routes->get('/listarCliente', 'cliente/UserCliente::listar_cliente');
$routes->get('buscarCliente', 'cliente/UserCliente::buscar_cliente');
$routes->put('update/(:num)', 'cliente/UserCliente::update/$1');
$routes->get('deleteUser', 'cliente/User::delete_user');

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}



