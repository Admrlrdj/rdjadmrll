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
$routes->post('/add-group', 'Database\Group::InsertData');
$routes->post('/edit-group/(:num)', 'Database\Group::UpdateData/$1');
$routes->get('/delete-group/(:num)', 'Database\Group::DeleteData/$1');

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
$routes->get('/pl2324', 'PremierLeague\PremierLeague::index');
$routes->post('/add-pl2324', 'PremierLeague\PremierLeague::InsertData2324');
$routes->post('/edit-pl2324/(:num)', 'PremierLeague\PremierLeague::UpdateData2324/$1');
$routes->get('/delete-pl2324/(:num)', 'PremierLeague\PremierLeague::DeleteData2324/$1');
//* Premier League 2022/2023
$routes->post('/add-pl2223', 'PremierLeague\PremierLeague::InsertData2223');
$routes->post('/edit-pl2223/(:num)', 'PremierLeague\PremierLeague::UpdateData2223/$1');
$routes->get('/delete-pl2223/(:num)', 'PremierLeague\PremierLeague::DeleteData2223/$1');
//* Premier League 2021/2022
$routes->post('/add-pl2122', 'PremierLeague\PremierLeague::InsertData2122');
$routes->post('/edit-pl2122/(:num)', 'PremierLeague\PremierLeague::UpdateData2122/$1');
$routes->get('/delete-pl2122/(:num)', 'PremierLeague\PremierLeague::DeleteData2122/$1');
//* Premier League 2020/2021
$routes->post('/add-pl2021', 'PremierLeague\PremierLeague::InsertData2021');
$routes->post('/edit-pl2021/(:num)', 'PremierLeague\PremierLeague::UpdateData2021/$1');
$routes->get('/delete-pl2021/(:num)', 'PremierLeague\PremierLeague::DeleteData2021/$1');
//* Premier League 2019/2020
$routes->post('/add-pl1920', 'PremierLeague\PremierLeague::InsertData1920');
$routes->post('/edit-pl1920/(:num)', 'PremierLeague\PremierLeague::UpdateData1920/$1');
$routes->get('/delete-pl1920/(:num)', 'PremierLeague\PremierLeague::DeleteData1920/$1');

//* La Liga 2023/2024
$routes->get('/laliga2324', 'LaLiga\LaLiga::index');
$routes->post('/add-laliga2324', 'LaLiga\LaLiga::InsertData2324');
$routes->post('/edit-laliga2324/(:num)', 'LaLiga\LaLiga::UpdateData2324/$1');
$routes->get('/delete-laliga2324/(:num)', 'LaLiga\LaLiga::DeleteData2324/$1');
//* La Liga 2022/2023
$routes->post('/add-laliga2223', 'LaLiga\LaLiga::InsertData2223');
$routes->post('/edit-laliga2223/(:num)', 'LaLiga\LaLiga::UpdateData2223/$1');
$routes->get('/delete-laliga2223/(:num)', 'LaLiga\LaLiga::DeleteData2223/$1');
//* La Liga 2021/2022
$routes->post('/add-laliga2122', 'LaLiga\LaLiga::InsertData2122');
$routes->post('/edit-laliga2122/(:num)', 'LaLiga\LaLiga::UpdateData2122/$1');
$routes->get('/delete-laliga2122/(:num)', 'LaLiga\LaLiga::DeleteData2122/$1');
//* La Liga 2020/2021
$routes->post('/add-laliga2021', 'LaLiga\LaLiga::InsertData2021');
$routes->post('/edit-laliga2021/(:num)', 'LaLiga\LaLiga::UpdateData2021/$1');
$routes->get('/delete-laliga2021/(:num)', 'LaLiga\LaLiga::DeleteData2021/$1');
//* La Liga 2019/2020
$routes->post('/add-laliga1920', 'LaLiga\LaLiga::InsertData1920');
$routes->post('/edit-laliga1920/(:num)', 'LaLiga\LaLiga::UpdateData1920/$1');
$routes->get('/delete-laliga1920/(:num)', 'LaLiga\LaLiga::DeleteData1920/$1');

//* Serie A 2023/2024
$routes->get('/seriea2324', 'SerieA\SerieA::index');
$routes->post('/add-seriea2324', 'SerieA\SerieA::InsertData');
$routes->post('/edit-seriea2324/(:num)', 'SerieA\SerieA::UpdateData/$1');
$routes->get('/delete-seriea2324/(:num)', 'SerieA\SerieA::DeleteData/$1');
//* Serie A 2022/2023
$routes->post('/add-seriea2223', 'SerieA\SerieA::InsertData2223');
$routes->post('/edit-seriea2223/(:num)', 'SerieA\SerieA::UpdateData2223/$1');
$routes->get('/delete-seriea2223/(:num)', 'SerieA\SerieA::DeleteData2223/$1');
//* Serie A 2021/2022
$routes->post('/add-seriea2122', 'SerieA\SerieA::InsertData2122');
$routes->post('/edit-seriea2122/(:num)', 'SerieA\SerieA::UpdateData2122/$1');
$routes->get('/delete-seriea2122/(:num)', 'SerieA\SerieA::DeleteData2122/$1');
//* Serie A 2020/2021
$routes->post('/add-seriea2021', 'SerieA\SerieA::InsertData2021');
$routes->post('/edit-seriea2021/(:num)', 'SerieA\SerieA::UpdateData2021/$1');
$routes->get('/delete-seriea2021/(:num)', 'SerieA\SerieA::DeleteData2021/$1');
//* Serie A 2019/2020
$routes->post('/add-seriea1920', 'SerieA\SerieA::InsertData1920');
$routes->post('/edit-seriea1920/(:num)', 'SerieA\SerieA::UpdateData1920/$1');
$routes->get('/delete-seriea1920/(:num)', 'SerieA\SerieA::DeleteData1920/$1');

//* Bundesliga 2023/2024
$routes->get('/bundesliga2324', 'Bundesliga\Bundesliga::index');
$routes->post('/add-bundesliga2324', 'Bundesliga\Bundesliga::InsertData');
$routes->post('/edit-bundesliga2324/(:num)', 'Bundesliga\Bundesliga::UpdateData/$1');
$routes->get('/delete-bundesliga2324/(:num)', 'Bundesliga\Bundesliga::DeleteData/$1');
//* Bundesliga 2022/2023
$routes->post('/add-bundesliga2223', 'Bundesliga\Bundesliga::InsertData2223');
$routes->post('/edit-bundesliga2223/(:num)', 'Bundesliga\Bundesliga::UpdateData2223/$1');
$routes->get('/delete-bundesliga2223/(:num)', 'Bundesliga\Bundesliga::DeleteData2223/$1');
//* Bundesliga 2021/2022
$routes->post('/add-bundesliga2122', 'Bundesliga\Bundesliga::InsertData2122');
$routes->post('/edit-bundesliga2122/(:num)', 'Bundesliga\Bundesliga::UpdateData2122/$1');
$routes->get('/delete-bundesliga2122/(:num)', 'Bundesliga\Bundesliga::DeleteData2122/$1');
//* Bundesliga 2020/2021
$routes->post('/add-bundesliga2021', 'Bundesliga\Bundesliga::InsertData2021');
$routes->post('/edit-bundesliga2021/(:num)', 'Bundesliga\Bundesliga::UpdateData2021/$1');
$routes->get('/delete-bundesliga2021/(:num)', 'Bundesliga\Bundesliga::DeleteData2021/$1');
//* Bundesliga 2019/2020
$routes->post('/add-bundesliga1920', 'Bundesliga\Bundesliga::InsertData1920');
$routes->post('/edit-bundesliga1920/(:num)', 'Bundesliga\Bundesliga::UpdateData1920/$1');
$routes->get('/delete-bundesliga1920/(:num)', 'Bundesliga\Bundesliga::DeleteData1920/$1');

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
