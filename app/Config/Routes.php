<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Pages::index');
$routes->get('/index.php', 'Pages::index');
$routes->get('/auth/login', 'Pages::login');
$routes->get('/auth/register', 'Pages::register');
$routes->get('/home/user', 'Pages::user');

// admin
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/index', 'Admin::index');

// admin sidebar hasil survei
$routes->get('/admin/hasil-survei/index', 'Admin::hasilSurveiResponden');
$routes->get('/admin/hasil-survei/lihat_responden', 'Admin::lihatResponden');
$routes->get('/admin/hasil-survei/instrumen', 'Admin::hasilSurveiInstrumen');
$routes->get('/admin/hasil-survei/lihat_instrumen', 'Admin::lihatInstrumen');

// admin sidebar kelola survei
$routes->get('/admin/kelola-survei/index', 'Admin::kelolaKategori');
$routes->get('/admin/kelola-survei/kategori', 'Admin::kelolaKategori');
$routes->get('/admin/kelola-survei/tambah_kategori', 'Admin::tambahKategori');
$routes->get('/admin/kelola-survei/edit_kategori', 'Admin::kelolaKategori');
$routes->get('/admin/kelolaKategori/(:num)', 'Admin::deleteKategori/$1');



$routes->get('/admin/kelola-survei/instrumen', 'Admin::kelolaInstrumen');
$routes->get('/admin/kelola-survei/tambah_instrumen', 'Admin::tambahInstrumen');
$routes->get('/admin/kelola-survei/edit_instrumen', 'Admin::kelolaKategori');
$routes->get('/admin/kelolaInstrumen/(:num)', 'Admin::deleteInstrumen/$1');


$routes->get('/admin/kelola-survei/pernyataan', 'Admin::kelolaPernyataan');


// $routes->get('/admin', 'Admin::index', ['filter' => 'role:user']);
// $routes->get('/admin/index', 'Admin::index', ['filter' => 'role:user']);



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
