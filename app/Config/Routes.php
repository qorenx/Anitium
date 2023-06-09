<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('home', 'Home::index');

service('auth')->routes($routes);


/*
* Anime Controller Routes
* Frontend
*/

$routes->get('anime','AnimeList::animelist');
$routes->get('anime/(:any)', 'Anitium::anime/$1');


/*
* Anime Streaming Controller Routes
* Frontend streaming controller
*/

$routes->get('watch','Streaming::watch');
$routes->get('watch/(:any)', 'Streaming::watch/$1');


/*
* Anime genre Controller Routes
* Frontend genre controller
*/
$routes->get('genre','Genre::genre');
$routes->get('genre/(:any)', 'Genre::genre/$1');


/*
* Anime pop Controller Routes
* Frontend pop controller
*/
$routes->get('popular','Popular::popular');
$routes->get('popular/(:any)', 'Popular::popular/$1');

/*
* Anime type Controller Routes
* Frontend type controller
*/
$routes->get('type/movies','Typemovie::typemovie');
$routes->get('type/movies/(:any)', 'Typemovie::typemovie/$1');
$routes->get('type/tv-series','Tvseries::Tvseries');
$routes->get('type/tv-series/(:any)', 'Tvseries::Tvseries/$1');

/*
* Anime list and random Controller Routes
* Frontend list and random controller
*/
$routes->get('az-list','Azlist::azlist');
$routes->get('az-list/(:any)', 'Azlist::azlist/$1');
$routes->get('random','Random::random');

/*
* Anime search Controller Routes
* Frontend search controller
*/
$routes->get('search','Search::search');
$routes->get('search/(:any)', 'Search::search/$1');


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
