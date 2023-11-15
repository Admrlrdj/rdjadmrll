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
$routes->post('/add-country', 'Database\Country::InsertData');
$routes->post('/edit-country/(:num)', 'Database\Country::UpdateData/$1');
$routes->get('/delete-country/(:num)', 'Database\Country::DeleteData/$1');

// * Club
$routes->get('/club', 'Database\Club::index');
$routes->post('/add-club', 'Database\Club::InsertData');
$routes->post('/edit-club/(:num)', 'Database\Club::UpdateData/$1');
$routes->get('/delete-club/(:num)', 'Database\Club::DeleteData/$1');

// * Confederation
$routes->get('/confederation', 'Database\Confederation::index');
$routes->post('/add-confederation', 'Database\Confederation::InsertData');
$routes->post('/edit-confederation/(:num)', 'Database\Confederation::UpdateData/$1');
$routes->get('/delete-confederation/(:num)', 'Database\Confederation::DeleteData/$1');

// * Group
$routes->get('/group', 'Database\Group::index');
$routes->post('/add-group', 'Group::InsertData');
$routes->post('/edit-group/(:num)', 'Group::UpdateData/$1');
$routes->get('/delete-group/(:num)', 'Group::DeleteData/$1');

// * RO16
$routes->get('/knockout', 'Database\Knockout::index');
$routes->post('/add-ro16', 'Database\Knockout::InsertRO16');
$routes->post('/edit-ro16/(:num)', 'Database\Knockout::UpdateRO16/$1');
$routes->get('/delete-ro16/(:num)', 'Database\Knockout::DeleteRO16/$1');

// * QF
$routes->get('/knockout', 'Database\Knockout::index');
$routes->post('/add-qf', 'Database\Knockout::InsertQF');
$routes->post('/edit-qf/(:num)', 'Database\Knockout::UpdateQF/$1');
$routes->get('/delete-qf/(:num)', 'Database\Knockout::DeleteQF/$1');

// * SF
$routes->get('/knockout', 'Database\Knockout::index');
$routes->post('/add-sf', 'Database\Knockout::InsertSF');
$routes->post('/edit-sf/(:num)', 'Database\Knockout::UpdateSF/$1');
$routes->get('/delete-sf/(:num)', 'Database\Knockout::DeleteSF/$1');

// * Final
$routes->get('/knockout', 'Database\Knockout::index');
$routes->post('/add-final', 'Database\Knockout::InsertFinal');
$routes->post('/edit-final/(:num)', 'Database\Knockout::UpdateFinal/$1');
$routes->get('/delete-final/(:num)', 'Database\Knockout::DeleteFinal/$1');

//* Premier League 2023/2024
$routes->get('/pl2324', 'PremierLeague\PremierLeague2324::index');
$routes->post('/add-pl2324', 'PremierLeague\PremierLeague2324::InsertData2324');
$routes->post('/edit-pl2324/(:num)', 'PremierLeague\PremierLeague2324::UpdateData2324/$1');
$routes->get('/delete-pl2324/(:num)', 'PremierLeague\PremierLeague2324::DeleteData2324/$1');
//* Premier League 2022/2023
$routes->post('/add-pl2223', 'PremierLeague\PremierLeague2324::InsertData2223');
$routes->post('/edit-pl2223/(:num)', 'PremierLeague\PremierLeague2324::UpdateData2223/$1');
$routes->get('/delete-pl2223/(:num)', 'PremierLeague\PremierLeague2324::DeleteData2223/$1');

//* La Liga 2023/2024
$routes->get('/laliga2324', 'LaLiga\LaLiga2324::index');
$routes->post('/add-laliga2324', 'LaLiga\LaLiga2324::InsertData');
$routes->post('/edit-laliga2324/(:num)', 'LaLiga\LaLiga2324::UpdateData/$1');
$routes->get('/delete-laliga2324/(:num)', 'LaLiga\LaLiga2324::DeleteData/$1');

//* Serie A 2023/2024
$routes->get('/seriea2324', 'SerieA\SerieA2324::index');
$routes->post('/add-seriea2324', 'SerieA\SerieA2324::InsertData');
$routes->post('/edit-seriea2324/(:num)', 'SerieA\SerieA2324::UpdateData/$1');
$routes->get('/delete-seriea2324/(:num)', 'SerieA\SerieA2324::DeleteData/$1');

//* World Cup 2022
$routes->get('/wc22', 'WorldCup\WorldCup2022::index');
$routes->post('/add-wc22', 'WorldCup\WorldCup2022::InsertData');
$routes->post('/edit-wc22/(:num)', 'WorldCup\WorldCup2022::UpdateData/$1');
$routes->get('/delete-wc22/(:num)', 'WorldCup\WorldCup2022::DeleteData/$1');
//* World Cup 2022 (RO16)
$routes->post('/add-wc22-ro16/(:num)', 'WorldCup\WorldCup2022::InsertDataRO16/$1');
$routes->post('/edit-wc22/(:num)', 'WorldCup\WorldCup2022::UpdateData/$1');
$routes->get('/delete-wc22/(:num)', 'WorldCup\WorldCup2022::DeleteData/$1');
//* World Cup 2022 (QF)
$routes->post('/add-wc22-qf/(:num)', 'WorldCup\WorldCup2022::InsertDataQF/$1');
$routes->post('/edit-wc22/(:num)', 'WorldCup\WorldCup2022::UpdateData/$1');
$routes->get('/delete-wc22/(:num)', 'WorldCup\WorldCup2022::DeleteData/$1');
//* World Cup 2022 (SF)
$routes->post('/add-wc22-sf/(:num)', 'WorldCup\WorldCup2022::InsertDataSF/$1');
$routes->post('/edit-wc22/(:num)', 'WorldCup\WorldCup2022::UpdateData/$1');
$routes->get('/delete-wc22/(:num)', 'WorldCup\WorldCup2022::DeleteData/$1');
//* World Cup 2022 (Final)
$routes->post('/add-wc22-final/(:num)', 'WorldCup\WorldCup2022::InsertDataFinal/$1');
$routes->post('/edit-wc22/(:num)', 'WorldCup\WorldCup2022::UpdateData/$1');
$routes->get('/delete-wc22/(:num)', 'WorldCup\WorldCup2022::DeleteData/$1');

// * Champions League 2023/2024
$routes->get('/cl2324', 'ChampionsLeague\ChampionsLeague2324::index');
$routes->post('/add-cl2324', 'ChampionsLeague\ChampionsLeague2324::InsertData');
$routes->post('/edit-cl2324/(:num)', 'ChampionsLeague\ChampionsLeague2324::UpdateData/$1');
$routes->get('/delete-cl2324/(:num)', 'ChampionsLeague\ChampionsLeague2324::DeleteData/$1');
// * Champions League 2023/2024 (RO16)
$routes->post('/add-cl2324-ro16/(:num)', 'ChampionsLeague\ChampionsLeague2324::InsertDataRO16/$1');
$routes->post('/edit-cl2324/(:num)', 'ChampionsLeague\ChampionsLeague2324::UpdateData/$1');
$routes->get('/delete-cl2324/(:num)', 'ChampionsLeague\ChampionsLeague2324::DeleteData/$1');

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
