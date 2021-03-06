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
$routes->post('/grafik_kepuasan/(:any)', 'Pages::hasilKepuasan/$1');

$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], function ($routes) {
	$routes->post('register', 'AuthController::attemptRegister');
	$routes->get('reset', 'AuthController::resetPassword');
	$routes->get('changePassword', 'AuthController::forgotPassword');
});


// admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin', 'Admin::index', ['filter' => 'role:Admin,Kontributor']);
// $routes->get('/admin/(:any)', 'Admin::index', ['filter' => 'role:Admin,Kontributor']);
// $routes->get('/Admin', 'Admin::index', ['filter' => 'role:Admin,Kontributor']);
// $routes->get('/Admin/(:any)', 'Admin::index', ['filter' => 'role:Admin,Kontributor']);

// admin sidebar hasil survei
//survei per responden
$routes->get('/admin/hasil-survei/responden', 'Admin\Response::hasilResponden', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/hasil-survei/responden', 'Admin\Response::hasilResponden', ['filter' => 'role:Admin,Kontributor']);

$routes->get('/admin/hasilSurveiResponden/(:any)', 'Admin\Response::responseResponden/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/hasilSurveiResponden/(:any)', 'Admin\Response::responseResponden/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->delete('/admin/deleteResponden/(:any)', 'Admin\Response::deleteResponden/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deleteResponden/(:any)', 'Admin\Response::deleteResponden/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/deleteTanggapan/(:any)', 'Admin\Response::deleteTanggapan/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deleteTanggapan/(:any)', 'Admin\Response::deleteTanggapan/$1', ['filter' => 'role:Admin']);


//survei data per instrumen
$routes->get('/admin/hasil-survei/instrumen', 'Admin\Response::hasilInstrumen', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/hasil-survei/instrumen', 'Admin\Response::hasilInstrumen', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/hasil-survei/instrumen/(:any)', 'Admin\Response::responseInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/hasil-survei/instrumen/(:any)', 'Admin\Response::responseInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);

// admin menu kelola kategori
$routes->get('/admin/kelola-survei/kategori_', 'Admin\Kategori_::kelolaKategori_', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/kelola-survei/kategori_', 'Admin\Kategori_::kelolaKategori_', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/kelola-survei/edit_kategori_', 'Admin\Kategori_::kelolaKategori_', ['filter' => 'role:Admin']);
$routes->get('/Admin/kelola-survei/edit_kategori_', 'Admin\Kategori_::kelolaKategori_', ['filter' => 'role:Admin']);
$routes->get('/admin/editKategori_/(:any)', 'Admin\Kategori_::editKategori_/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/editKategori_/(:any)', 'Admin\Kategori_::editKategori_/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/editKategori_/(:any)', 'Admin\Kategori_::editKategori_/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/editKategori_/(:any)', 'Admin\Kategori_::editKategori_/$1', ['filter' => 'role:Admin']);

$routes->post('/admin/saveKategori_', 'Admin\Kategori_::saveKategori_', ['filter' => 'role:Admin']);
$routes->post('/Admin/saveKategori_', 'Admin\Kategori_::saveKategori_', ['filter' => 'role:Admin']);
$routes->post('/admin/updateKategori_/(:any)', 'Admin\Kategori_::updateKategori_/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateKategori_/(:any)', 'Admin\Kategori_::updateKategori_/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/deleteKategori_/(:any)', 'Admin\Kategori_::deleteKategori_/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deleteKategori_/(:any)', 'Admin\Kategori_::deleteKategori_/$1', ['filter' => 'role:Admin']);


$routes->get('/admin/lihatKategori', 'Admin\Kategori_::lihatKategori', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/lihatKategori', 'Admin\Kategori_::lihatKategori', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/lihatInstrumen', 'Admin\Instrumen_::lihatInstrumen', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/lihatInstrumen', 'Admin\Instrumen_::lihatInstrumen', ['filter' => 'role:Admin,Kontributor']);

// admin menu kelola instrumen
$routes->get('/admin/kelola-survei/instrumen_', 'Admin\Instrumen_::kelolaInstrumen_', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/kelola-survei/instrumen_', 'Admin\Instrumen_::kelolaInstrumen_', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/kelola-survei/edit_instrumen_', 'Admin\Instrumen_::kelolaInstrumen_', ['filter' => 'role:Admin']);
$routes->get('/Admin/kelola-survei/edit_instrumen_', 'Admin\Instrumen_::kelolaInstrumen_', ['filter' => 'role:Admin']);
$routes->get('/admin/editInstrumen_/(:any)', 'Admin\Instrumen_::editInstrumen_/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/editInstrumen_/(:any)', 'Admin\Instrumen_::editInstrumen_/$1', ['filter' => 'role:Admin']);

$routes->post('/admin/saveInstrumen_/(:any)', 'Admin\Instrumen_::saveinstrumen_/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/saveInstrumen_/(:any)', 'Admin\Instrumen_::saveinstrumen_/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/updateInstrumen_/(:any)', 'Admin\Instrumen_::updateInstrumen_/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateInstrumen_/(:any)', 'Admin\Instrumen_::updateInstrumen_/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/deleteInstrumen_/(:any)', 'Admin\Instrumen_::deleteInstrumen_/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deleteInstrumen_/(:any)', 'Admin\Instrumen_::deleteInstrumen_/$1', ['filter' => 'role:Admin']);

$routes->get('/admin/kelola-survei/tambah_instrumen_/(:any)', 'Admin\Instrumen_::tambahInstrumen_/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/kelola-survei/tambah_instrumen_/(:any)', 'Admin\Instrumen_::tambahInstrumen_/$1', ['filter' => 'role:Admin']);

$routes->get('/admin/kelola-survei/lihatInstrumen/(:any)', 'Admin\Kategori::lihatInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/kelola-survei/lihatInstrumen/(:any)', 'Admin\Kategori::lihatInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/kelola-survei/edit_instrumen', 'Admin\Instrumen::kelolaInstrumen', ['filter' => 'role:Admin']);
$routes->get('/Admin/kelola-survei/edit_instrumen', 'Admin\Instrumen::kelolaInstrumen', ['filter' => 'role:Admin']);
$routes->get('/admin/editInstrumen/(:any)', 'Admin\Instrumen::editInstrumen/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/editInstrumen/(:any)', 'Admin\Instrumen::editInstrumen/$1', ['filter' => 'role:Admin']);

$routes->post('/admin/saveInstrumen/(:any)', 'Admin\Instrumen::saveinstrumen/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/saveInstrumen/(:any)', 'Admin\Instrumen::saveinstrumen/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/updateInstrumen/(:any)', 'Admin\Instrumen::updateInstrumen/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateInstrumen/(:any)', 'Admin\Instrumen::updateInstrumen/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/deleteInstrumen/(:any)', 'Admin\Instrumen::deleteInstrumen/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deleteInstrumen/(:any)', 'Admin\Instrumen::deleteInstrumen/$1', ['filter' => 'role:Admin']);

$routes->get('/admin/kelola-survei/tambah_instrumen/(:any)', 'Admin\Instrumen::tambahInstrumen/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/kelola-survei/tambah_instrumen/(:any)', 'Admin\Instrumen::tambahInstrumen/$1', ['filter' => 'role:Admin']);


// admin kelola survei (butir pernyataan)
$routes->get('/admin/kelola-survei/pernyataan', 'Admin\Pernyataan::kelolaPernyataan', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/kelola-survei/pernyataan', 'Admin\Pernyataan::kelolaPernyataan', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/kelola-survei/butir/(:any)', 'Admin\Pernyataan::butirInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/kelola-survei/butir/(:any)', 'Admin\Pernyataan::butirInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/kelola-survei/tambah_pernyataan', 'Admin\Pernyataan::tambahPernyataan', ['filter' => 'role:Admin']);
$routes->get('/Admin/kelola-survei/tambah_pernyataan', 'Admin\Pernyataan::tambahPernyataan', ['filter' => 'role:Admin']);
$routes->get('/admin/editPernyataan/(:any)', 'Admin\Pernyataan::editPernyataan/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/editPernyataan/(:any)', 'Admin\Pernyataan::editPernyataan/$1', ['filter' => 'role:Admin']);

$routes->post('/admin/savePernyataan/(:any)', 'Admin\Pernyataan::savePernyataan/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/savePernyataan/(:any)', 'Admin\Pernyataan::savePernyataan/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/updatePernyataan/(:any)', 'Admin\Pernyataan::updatePernyataan/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updatePernyataan/(:any)', 'Admin\Pernyataan::updatePernyataan/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/deletePernyataan/(:any)', 'Admin\Pernyataan::deletePernyataan/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deletePernyataan/(:any)', 'Admin\Pernyataan::deletePernyataan/$1', ['filter' => 'role:Admin']);

// isi petunjuk pengisian instrumen
$routes->post('/admin/savePetunjukPengisian/(:any)', 'Admin\Pernyataan::savePetunjukPengisian/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/savePetunjukPengisian/(:any)', 'Admin\Pernyataan::savePetunjukPengisian/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/updatePetunjukPengisian/(:any)', 'Admin\Pernyataan::updatePetunjukPengisian/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updatePetunjukPengisian/(:any)', 'Admin\Pernyataan::updatePetunjukPengisian/$1', ['filter' => 'role:Admin']);

// menu analisis survei
$routes->get('/admin/analisisKepuasan', 'Admin\Analisis::home', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/analisisKepuasan', 'Admin\Analisis::home', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/laporanSurvei', 'Admin\Analisis::laporan', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/laporanSurvei', 'Admin\Analisis::laporan', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/laporanInstrumen/(:any)', 'Admin\Analisis::laporanInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/laporanInstrumen/(:any)', 'Admin\Analisis::laporanInstrumen/$1', ['filter' => 'role:Admin,Kontributor']);

$routes->get('/admin/laporanKepuasan/(:any)', 'Admin\Analisis::laporanKepuasan/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/laporanKepuasan/(:any)', 'Admin\Analisis::laporanKepuasan/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->post('/admin/saveLaporanInstrumen/(:any)', 'Admin\Analisis::saveLaporanInstrumen/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/saveLaporanInstrumen/(:any)', 'Admin\Analisis::saveLaporanInstrumen/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/deleteLaporanInstrumen/(:any)', 'Admin\Analisis::deleteLaporanInstrumen/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deleteLaporanInstrumen/(:any)', 'Admin\Analisis::deleteLaporanInstrumen/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/updateLaporanInstrumen/(:any)', 'Admin\Analisis::updateLaporanInstrumen/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateLaporanInstrumen/(:any)', 'Admin\Analisis::updateLaporanInstrumen/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/editLaporanInstrumen/(:any)', 'Admin\Analisis::editLaporanInstrumen/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/editLaporanInstrumen/(:any)', 'Admin\Analisis::editLaporanInstrumen/$1', ['filter' => 'role:Admin']);

$routes->post('/admin/saveLaporanAnalisis', 'Admin\Analisis::saveLaporanAnalisis', ['filter' => 'role:Admin']);
$routes->post('/Admin/saveLaporanAnalisis', 'Admin\Analisis::saveLaporanAnalisis', ['filter' => 'role:Admin']);
$routes->get('/admin/editLaporanAnalisis/(:any)', 'Admin\Analisis::editLaporanAnalisis/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/editLaporanAnalisis/(:any)', 'Admin\Analisis::editLaporanAnalisis/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/updateLaporanAnalisis/(:any)', 'Admin\Analisis::updateLaporanAnalisis/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateLaporanAnalisis/(:any)', 'Admin\Analisis::updateLaporanAnalisis/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/saveTampilGrafikStatus/(:any)', 'Admin\Analisis::saveTampilGrafikStatus/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/saveTampilGrafikStatus/(:any)', 'Admin\Analisis::saveTampilGrafikStatus/$1', ['filter' => 'role:Admin']);


// menu kelola jenis responden
$routes->get('/admin/jenisResponden', 'Admin\JenisResponden::index', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/jenisResponden', 'Admin\JenisResponden::index', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/editJenisResponden/(:any)', 'Admin\JenisResponden::editJenisResponden/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/editJenisResponden/(:any)', 'Admin\JenisResponden::editJenisResponden/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/deleteJenisResponden/(:any)', 'Admin\JenisResponden::deleteJenisResponden/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/deleteJenisResponden/(:any)', 'Admin\JenisResponden::deleteJenisResponden/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/saveJenisResponden', 'Admin\JenisResponden::saveJenisResponden', ['filter' => 'role:Admin']);
$routes->post('/Admin/saveJenisResponden', 'Admin\JenisResponden::saveJenisResponden', ['filter' => 'role:Admin']);
$routes->post('/admin/updateJenisResponden/(:any)', 'Admin\JenisResponden::updateJenisResponden/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateJenisResponden/(:any)', 'Admin\JenisResponden::updateJenisResponden/$1', ['filter' => 'role:Admin']);

$routes->get('/admin/kelolaDataDiri/(:any)', 'Admin\JenisResponden::kelolaDataDiri/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/kelolaDataDiri/(:any)', 'Admin\JenisResponden::kelolaDataDiri/$1', ['filter' => 'role:Admin,Kontributor']);
$routes->post('/admin/updateDataDiri/(:any)', 'Admin\JenisResponden::updateDataDiri/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateDataDiri/(:any)', 'Admin\JenisResponden::updateDataDiri/$1', ['filter' => 'role:Admin']);


// menu kelola akun
$routes->get('/admin/kelolaAkun', 'Admin\KelolaAkun::index', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/Admin/kelolaAkun', 'Admin\KelolaAkun::index', ['filter' => 'role:Admin,Kontributor']);
$routes->get('/admin/kelolaAkun/editAkunDosen/(:any)', 'Admin\KelolaAkun::editAkunDosen/$1', ['filter' => 'role:Admin']);
$routes->get('/Admin/kelolaAkun/editAkunDosen/(:any)', 'Admin\KelolaAkun::editAkunDosen/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/kelolaAkun/removePermission/(:any)', 'Admin\KelolaAkun::removePermission/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/kelolaAkun/removePermission/(:any)', 'Admin\KelolaAkun::removePermission/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/kelolaAkun/addAkunPermission', 'Admin\KelolaAkun::addAkunPermission', ['filter' => 'role:Admin']);
$routes->post('/Admin/kelolaAkun/addAkunPermission', 'Admin\KelolaAkun::addAkunPermission', ['filter' => 'role:Admin']);


$routes->post('/admin/kelolaAkun/activeStatus/(:any)', 'Admin\KelolaAkun::activeStatus/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/kelolaAkun/activeStatus/(:any)', 'Admin\KelolaAkun::activeStatus/$1', ['filter' => 'role:Admin']);
$routes->delete('/admin/kelolaAkun/deleteUser/(:any)', 'Admin\KelolaAkun::deleteUser/$1', ['filter' => 'role:Admin']);
$routes->delete('/Admin/kelolaAkun/deleteUser/(:any)', 'Admin\KelolaAkun::deleteUser/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/updateInsDosen/(:any)', 'Admin\KelolaAkun::updateInsDosen/$1', ['filter' => 'role:Admin']);
$routes->post('/Admin/updateInsDosen/(:any)', 'Admin\KelolaAkun::updateInsDosen/$1', ['filter' => 'role:Admin']);



// responden
$routes->get('/Responden/isiDataDiri/(:any)', 'Responden\DataDiri::isiDataDiri/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->post('/responden/updateDataDiri/(:any)', 'Responden\DataDiri::updateDataDiri/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->post('/Responden/updateDataDiri/(:any)', 'Responden\DataDiri::updateDataDiri/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->delete('/responden/deleteColumnDataDiri/(:any)', 'Responden\DataDiri::deleteColumnDataDiri/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti, Pengabdi,Pengguna Lulusan']);
$routes->delete('/Responden/deleteColumnDataDiri/(:any)', 'Responden\DataDiri::deleteColumnDataDiri/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti, Pengabdi,Pengguna Lulusan']);

$routes->get('/responden', 'Responden\Response::index', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->get('/Responden', 'Responden\Response::index', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->get('/responden/riwayatSurvei/(:any)', 'Responden\Response::riwayatSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->get('/Responden/riwayatSurvei/(:any)', 'Responden\Response::riwayatSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->post('/responden/isiSurvei/(:any)', 'Responden\Response::isiSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->post('/Responden/isiSurvei/(:any)', 'Responden\Response::isiSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->post('/responden/saveSurvei/(:any)', 'Responden\Response::saveSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);
$routes->post('/Responden/saveSurvei/(:any)', 'Responden\Response::saveSurvei/$1', ['filter' => 'role:Admin,Kontributor,Dosen,Tenaga Kependidikan,Mahasiswa,Alumni/Lulusan,Mitra,Partners,Peneliti,Pengabdi,Pengguna Lulusan']);





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
