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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');

// * Auth
$routes->get('/login', 'Info\Auth::Login');
$routes->get('/register', 'Info\Auth::Register');
$routes->get('/logout', 'Info\Auth::Logout');

// * Valid Auth
$routes->post('/valid-register', 'Info\Auth::ValidRegister');
$routes->post('/valid-login', 'Info\Auth::ValidLogin');

// * Profile
$routes->get('/profile', 'Info\Profile::index');
$routes->post('/update-profile/(:num)', 'Info\Profile::UpdateData/$1');

// * User
$routes->get('/user', 'Info\User::index');
$routes->post('/add-user', 'Info\User::InsertData');
$routes->post('/edit-user/(:num)', 'Info\User::UpdateData/$1');
$routes->get('/delete-user/(:num)', 'Info\User::DeleteData/$1');

// * Country
$routes->get('/country', 'Database\Country::index');

// * Club
$routes->get('/club', 'Database\Club::index');

// * Confederation
$routes->get('/confederation', 'Database\Confederation::index');

//* Premier League
$routes->get('/premierleague', 'PremierLeague\PremierLeague::index');

//* La Liga
$routes->get('/laliga', 'LaLiga\LaLiga::index');

//* Serie A
$routes->get('/seriea', 'SerieA\SerieA::index');

//* Bundesliga
$routes->get('/bundesliga', 'Bundesliga\Bundesliga::index');

//* Ligue 1
$routes->get('/ligue1', 'Ligue1\Ligue1::index');

//* BRI League 1
$routes->get('/liga1', 'Liga1\Liga1::index');

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
