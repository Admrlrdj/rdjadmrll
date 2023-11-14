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
$routes->get('/login', 'Auth::Login');
$routes->get('/register', 'Auth::Register');
$routes->get('/logout', 'Auth::Logout');

// * Valid Auth
$routes->post('/valid-register', 'Auth::ValidRegister');
$routes->post('/valid-login', 'Auth::ValidLogin');

// * Profile
$routes->get('/profile', 'Profile::index');
$routes->post('/update-profile/(:num)', 'Profile::UpdateData/$1');

// * User
$routes->get('/user', 'User::index');
$routes->post('/add-user', 'User::InsertData');
$routes->post('/edit-user/(:num)', 'User::UpdateData/$1');
$routes->get('/delete-user/(:num)', 'User::DeleteData/$1');

// * Country
$routes->get('/country', 'Country::index');
$routes->post('/add-country', 'Country::InsertData');
$routes->post('/edit-country/(:num)', 'Country::UpdateData/$1');
$routes->get('/delete-country/(:num)', 'Country::DeleteData/$1');

// * Club
$routes->get('/club', 'Club::index');
$routes->post('/add-club', 'Club::InsertData');
$routes->post('/edit-club/(:num)', 'Club::UpdateData/$1');
$routes->get('/delete-club/(:num)', 'Club::DeleteData/$1');

// * Confederation
$routes->get('/confederation', 'Confederation::index');
$routes->post('/add-confederation', 'Confederation::InsertData');
$routes->post('/edit-confederation/(:num)', 'Confederation::UpdateData/$1');
$routes->get('/delete-confederation/(:num)', 'Confederation::DeleteData/$1');

// * Group
$routes->get('/group', 'Group::index');
$routes->post('/add-group', 'Group::InsertData');
$routes->post('/edit-group/(:num)', 'Group::UpdateData/$1');
$routes->get('/delete-group/(:num)', 'Group::DeleteData/$1');

// * RO16
$routes->get('/knockout', 'Knockout::index');
$routes->post('/add-ro16', 'Knockout::InsertRO16');
$routes->post('/edit-ro16/(:num)', 'Knockout::UpdateRO16/$1');
$routes->get('/delete-ro16/(:num)', 'Knockout::DeleteRO16/$1');

// * QF
$routes->get('/knockout', 'Knockout::index');
$routes->post('/add-qf', 'Knockout::InsertQF');
$routes->post('/edit-qf/(:num)', 'Knockout::UpdateQF/$1');
$routes->get('/delete-qf/(:num)', 'Knockout::DeleteQF/$1');

// * SF
$routes->get('/knockout', 'Knockout::index');
$routes->post('/add-sf', 'Knockout::InsertSF');
$routes->post('/edit-sf/(:num)', 'Knockout::UpdateSF/$1');
$routes->get('/delete-sf/(:num)', 'Knockout::DeleteSF/$1');

// * Final
$routes->get('/knockout', 'Knockout::index');
$routes->post('/add-final', 'Knockout::InsertFinal');
$routes->post('/edit-final/(:num)', 'Knockout::UpdateFinal/$1');
$routes->get('/delete-final/(:num)', 'Knockout::DeleteFinal/$1');

//* Premier League 2023/2024
$routes->get('/pl2324', 'PremierLeague2324::index');
$routes->post('/add-pl2324', 'PremierLeague2324::InsertData');
$routes->post('/edit-pl2324/(:num)', 'PremierLeague2324::UpdateData/$1');
$routes->get('/delete-pl2324/(:num)', 'PremierLeague2324::DeleteData/$1');

//* La Liga 2023/2024
$routes->get('/laliga2324', 'LaLiga2324::index');
$routes->post('/add-laliga2324', 'LaLiga2324::InsertData');
$routes->post('/edit-laliga2324/(:num)', 'LaLiga2324::UpdateData/$1');
$routes->get('/delete-laliga2324/(:num)', 'LaLiga2324::DeleteData/$1');

//* World Cup 2022
$routes->get('/wc22', 'WorldCup2022::index');
$routes->post('/add-wc22', 'WorldCup2022::InsertData');
$routes->post('/edit-wc22/(:num)', 'WorldCup2022::UpdateData/$1');
$routes->get('/delete-wc22/(:num)', 'WorldCup2022::DeleteData/$1');

// * Champions League 2023/2024
$routes->get('/cl2324', 'ChampionsLeague2324::index');
$routes->post('/add-cl2324', 'ChampionsLeague2324::InsertData');
$routes->post('/edit-cl2324/(:num)', 'ChampionsLeague2324::UpdateData/$1');
$routes->get('/delete-cl2324/(:num)', 'ChampionsLeague2324::DeleteData/$1');
// * Champions League 2023/2024 (RO16)
$routes->post('/add-cl2324-ro16', 'ChampionsLeague2324::InsertDataRO16');
$routes->post('/edit-cl2324/(:num)', 'ChampionsLeague2324::UpdateData/$1');
$routes->get('/delete-cl2324/(:num)', 'ChampionsLeague2324::DeleteData/$1');

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
