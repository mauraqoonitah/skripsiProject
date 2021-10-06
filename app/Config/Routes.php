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
//survei per responden
$routes->get('/admin/hasil-survei/responden', 'Admin\Response::hasilResponden');
$routes->get('/admin/hasilSurveiResponden/(:any)', 'Admin\Response::responseResponden/$1');
//survei data per instrumen
$routes->get('/admin/hasil-survei/instrumen', 'Admin\Response::hasilInstrumen');
$routes->get('/admin/hasil-survei/instrumen/(:any)', 'Admin\Response::responseInstrumen/$1');

// admin menu kelola kategori
// new
$routes->get('/admin/kelola-survei/kategori_', 'Admin\Kategori_::kelolaKategori_');
$routes->get('/admin/kelola-survei/edit_kategori_', 'Admin\Kategori_::kelolaKategori_');
$routes->get('/admin/kelola-survei/tambah_kategori_', 'Admin\Kategori_::tambahKategori_');
$routes->get('/admin/editKategori_/(:any)', 'Admin\Kategori_::editKategori_/$1');
$routes->post('/admin/editKategori_/(:any)', 'Admin\Kategori_::editKategori_/$1');

$routes->post('/admin/saveKategori_', 'Admin\Kategori_::saveKategori_');
$routes->post('/admin/updateKategori_/(:any)', 'Admin\Kategori_::updateKategori_/$1');
$routes->delete('/admin/deleteKategori_/(:any)', 'Admin\Kategori_::deleteKategori_/$1');
//./ new

// $routes->get('/admin/kelola-survei/kategori', 'Admin\Kategori::kelolaKategori');
// $routes->get('/admin/kelola-survei/edit_kategori', 'Admin\Kategori::kelolaKategori');
// $routes->get('/admin/kelola-survei/tambah_kategori', 'Admin\Kategori::tambahKategori');
// $routes->get('/admin/editKategori/(:any)', 'Admin\Kategori::editKategori/$1');
// $routes->post('/admin/editKategori/(:any)', 'Admin\Kategori::editKategori/$1');

// $routes->post('/admin/saveKategori', 'Admin\Kategori::saveKategori');
// $routes->post('/admin/updateKategori/(:any)', 'Admin\Kategori::updateKategori/$1');
// $routes->delete('/admin/deleteKategori/(:any)', 'Admin\Kategori::deleteKategori/$1');


// admin menu kelola instrumen
// new instrumen_

$routes->get('/admin/kelola-survei/instrumen_', 'Admin\Instrumen_::kelolaInstrumen_');
$routes->get('/admin/kelola-survei/edit_instrumen_', 'Admin\Instrumen_::kelolaInstrumen_');
$routes->get('/admin/editInstrumen_/(:any)', 'Admin\Instrumen_::editInstrumen_/$1');

$routes->post('/admin/saveInstrumen_/(:any)', 'Admin\Instrumen_::saveinstrumen_/$1');
$routes->post('/admin/updateInstrumen_/(:any)', 'Admin\Instrumen_::updateInstrumen_/$1');
$routes->delete('/admin/deleteInstrumen_/(:any)', 'Admin\Instrumen_::deleteInstrumen_/$1');

$routes->get('/admin/kelola-survei/tambah_instrumen_/(:any)', 'Admin\Instrumen_::tambahInstrumen_/$1');
// ./new instrumen_

$routes->get('/admin/kelola-survei/lihatInstrumen/(:any)', 'Admin\Kategori::lihatInstrumen/$1');
$routes->get('/admin/kelola-survei/edit_instrumen', 'Admin\Instrumen::kelolaInstrumen');
$routes->get('/admin/editInstrumen/(:any)', 'Admin\Instrumen::editInstrumen/$1');

$routes->post('/admin/saveInstrumen/(:any)', 'Admin\Instrumen::saveinstrumen/$1');
$routes->post('/admin/updateInstrumen/(:any)', 'Admin\Instrumen::updateInstrumen/$1');
$routes->delete('/admin/deleteInstrumen/(:any)', 'Admin\Instrumen::deleteInstrumen/$1');

$routes->get('/admin/kelola-survei/tambah_instrumen/(:any)', 'Admin\Instrumen::tambahInstrumen/$1');


// admin kelola survei (butir pernyataan)
$routes->get('/admin/kelola-survei/pernyataan', 'Admin\Pernyataan::kelolaPernyataan');
$routes->get('/admin/kelola-survei/butir/(:any)', 'Admin\Pernyataan::butirInstrumen/$1');
$routes->get('/admin/kelola-survei/tambah_pernyataan', 'Admin\Pernyataan::tambahPernyataan');
$routes->get('/admin/editPernyataan/(:any)', 'Admin\Pernyataan::editPernyataan/$1');

$routes->post('/admin/savePernyataan/(:any)', 'Admin\Pernyataan::savePernyataan/$1');
$routes->post('/admin/updatePernyataan/(:any)', 'Admin\Pernyataan::updatePernyataan/$1');
$routes->delete('/admin/deletePernyataan/(:any)', 'Admin\Pernyataan::deletePernyataan/$1');

// $routes->get('/admin', 'Admin::index', ['filter' => 'role:user']);
// $routes->get('/admin/index', 'Admin::index', ['filter' => 'role:user']);


// menu analisis survei
$routes->get('/admin/analisisKepuasan', 'Admin\Analisis::home');
$routes->get('/admin/laporanSurvei', 'Admin\Analisis::laporan');
$routes->get('/admin/laporanInstrumen', 'Admin\Analisis::laporanInstrumen');
$routes->get('/admin/laporanKepuasan', 'Admin\Analisis::laporanKepuasan');

// responden

$routes->get('/responden', 'Responden\Response::index', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Pendidik,Mahasiswa,Alumni/Lulusan,Mitra,Peneliti, Pengabdi,Pengguna Lulusan']);

// $routes->get('/responden/isiSurvei/(:any)', 'Responden\Response::isiSurvei/$1', ['filter' => 'role:Admin']);

$routes->post('/responden/isiSurvei/(:any)', 'Responden\Response::isiSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Pendidik,Mahasiswa,Alumni/Lulusan,Mitra,Peneliti, Pengabdi,Pengguna Lulusan']);

$routes->post('/responden/saveSurvei/(:any)', 'Responden\Response::saveSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Pendidik,Mahasiswa,Alumni/Lulusan,Mitra,Peneliti, Pengabdi,Pengguna Lulusan']);




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
