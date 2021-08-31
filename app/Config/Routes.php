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
$routes->get('/admin', 'Admin::index', ['filter' => 'role:Admin,Kontributor']);


// admin sidebar hasil survei
$routes->get('/admin/hasil-survei/index', 'Admin::dataResponden');
//data responden
$routes->get('/admin/hasil-survei/instrumen', 'Admin::hasilSurveiInstrumen');
$routes->get('/admin/hasil-survei/lihat_instrumen', 'Admin::lihatInstrumen');

// admin kelola survei (kategori)
$routes->get('/admin/kelola-survei/kategori', 'Admin\Kategori::kelolaKategori');
$routes->get('/admin/kelola-survei/edit_kategori', 'Admin\Kategori::kelolaKategori');
$routes->get('/admin/kelola-survei/tambah_kategori', 'Admin\Kategori::tambahKategori');
$routes->get('/admin/editKategori/(:any)', 'Admin\Kategori::editKategori/$1');
$routes->post('/admin/editKategori/(:any)', 'Admin\Kategori::editKategori/$1');

$routes->post('/admin/saveKategori', 'Admin\Kategori::saveKategori');
$routes->post('/admin/updateKategori/(:any)', 'Admin\Kategori::updateKategori/$1');
$routes->delete('/admin/deleteKategori/(:any)', 'Admin\Kategori::deleteKategori/$1');

$routes->get('/admin/kelola-survei/lihatInstrumen/(:any)', 'Admin\Kategori::lihatInstrumen/$1');

// admin kelola survei (instrumen)
$routes->get('/admin/kelola-survei/instrumen', 'Admin\Instrumen::kelolaInstrumen');
$routes->get('/admin/kelola-survei/edit_instrumen', 'Admin\Instrumen::kelolaInstrumen');
$routes->get('/admin/editInstrumen/(:any)', 'Admin\Instrumen::editInstrumen/$1');

$routes->post('/admin/saveInstrumen/(:any)', 'Admin\Instrumen::saveinstrumen/$1');
$routes->post('/admin/updateInstrumen/(:any)', 'Admin\Instrumen::updateInstrumen/$1');
$routes->delete('/admin/deleteInstrumen/(:any)', 'Admin\Instrumen::deleteInstrumen/$1');

$routes->get('/admin/kelola-survei/tambah_instrumen/(:any)', 'Admin\Instrumen::tambahInstrumen/$1');

// admin kelola survei (butir pernyataan)
$routes->get('/admin/kelola-survei/pernyataan', 'Admin::kelolaPernyataan');
$routes->get('/admin/butir/(:any)', 'Admin::butirInstrumen/$1');
$routes->get('/admin/kelola-survei/tambah_pernyataan', 'Admin::tambahPernyataan');


// $routes->get('/admin', 'Admin::index', ['filter' => 'role:user']);
// $routes->get('/admin/index', 'Admin::index', ['filter' => 'role:user']);


// membuat analisis kepuasan
$routes->get('/admin/analisisKepuasan', 'Admin\Analisis::home');
$routes->get('/admin/laporanSurvei', 'Admin\Analisis::laporan');
$routes->get('/admin/laporanInstrumen', 'Admin\Analisis::laporanInstrumen');
$routes->get('/admin/laporanKepuasan', 'Admin\Analisis::laporanKepuasan');

// responden
$routes->get('/responden', 'Responden\Beranda::index', ['filter' => 'role:Admin,Responden,Kontributor']);
$routes->get('/responden/index', 'Responden\Beranda::index', ['filter' => 'role:Admin,Responden,Kontributor']);
$routes->get('/responden/isiDataDiri', 'Responden\Beranda::isiDataDiri', ['filter' => 'role:Admin,Responden,Kontributor']);
$routes->get('/responden/isiSurvei', 'Responden\Beranda::isiSurvei', ['filter' => 'role:Admin,Responden,Kontributor']);


$routes->get('/responden/instrumen/(:any)', 'Responden\Beranda::pilihInstrumen/$1', ['filter' => 'role:Admin,Responden,Kontributor']);
$routes->get('/responden/saveDataDiri', 'Responden\Beranda::saveDataDiri', ['filter' => 'role:Admin,Responden,Kontributor']);






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
