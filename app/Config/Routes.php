<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('AuthController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'DashboardController::index');

// $routes->group('auth', function ($routes) {
//     $routes->get('/', 'LoginController::index', ['namespace' => 'App\Controllers\Auth']);
//     // $routes->post('login', 'LoginController::store', ['namespace' => 'App\Controllers\Auth']);
//     // $routes->get('logout', 'LoginController::logout', ['namespace' => 'App\Controllers\Auth']);
//     // $routes->post('session', 'LoginController::session', ['namespace' => 'App\Controllers\Auth']);
//   });
  $routes->group('auth', function ($routes) {
    $routes->get('/', 'AuthController::index');
    $routes->post('login', 'AuthController::login');
    $routes->get('logout', 'AuthController::logout');
  });
  $routes->group('signup', function ($routes) {
    $routes->get('/', 'SignupController::index');
    $routes->post('submit', 'SignupController::submit');
    // $routes->get('logout', 'AuthController::logout');
  });
  $routes->group('product', function ($routes) {
    $routes->get('/', 'ProductController::index');
    $routes->post('add', 'ProductController::add');
    // $routes->get('logout', 'AuthController::logout');
  });
  $routes->group('dashboard', function ($routes) {
    $routes->get('/', 'DashboardController::index');
    $routes->post('cart/(:any)', 'DashboardController::cart/$1');
    // $routes->get('logout', 'AuthController::logout');
  });

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
