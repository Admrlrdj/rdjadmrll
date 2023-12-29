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
$routes->get('/', 'Info\Auth::Login');

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

//* Champions League 2023/2024
$routes->get('/cl2324standings', 'ChampionsLeague\CL2324\Standings::index');
$routes->get('/cl2324stats', 'ChampionsLeague\CL2324\Statistics::index');

//* Champions League 2022/2023
$routes->get('/cl2223standings', 'ChampionsLeague\CL2223\Standings::index');
$routes->get('/cl2223stats', 'ChampionsLeague\CL2223\Statistics::index');

//* Premier League
$routes->get('/plstandings', 'PremierLeague\Standings::index');
$routes->get('/plstats', 'PremierLeague\Statistics::index');

//* La Liga
$routes->get('/llstandings', 'LaLiga\Standings::index');
$routes->get('/llstats', 'LaLiga\Statistics::index');

//* Serie A
$routes->get('/sastandings', 'SerieA\Standings::index');
$routes->get('/sastats', 'SerieA\Statistics::index');

//* Bundesliga
$routes->get('/blstandings', 'Bundesliga\Standings::index');
$routes->get('/blstats', 'Bundesliga\Statistics::index');

//* Ligue 1
$routes->get('/lg1standings', 'Ligue1\Standings::index');
$routes->get('/lg1stats', 'Ligue1\Statistics::index');

//* BRI League 1
$routes->get('/l1standings', 'Liga1\Standings::index');
$routes->get('/l1stats', 'Liga1\Statistics::index');

//* Saudi Pro League
$routes->get('/splstandings', 'ROSHN\Standings::index');
$routes->get('/splstats', 'ROSHN\Statistics::index');

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
