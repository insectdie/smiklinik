<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');
$routes->get('RegistrasiPasien', 'RegistrasiPasien::index');

/* Master */
$routes->get('StatusKeluarga', '\App\Controllers\StatusKeluarga::index');
$routes->get('StatusPekerjaan', '\App\Controllers\StatusPekerjaan::index');
$routes->get('StatusPendidikan', '\App\Controllers\StatusPendidikan::index');
$routes->get('KelompokPasien', '\App\Controllers\KelompokPasien::index');
$routes->get('SubKelompokPasien', '\App\Controllers\SubKelompokPasien::index');
$routes->get('Agama', '\App\Controllers\Agama::index');
$routes->get('PenanggungBiaya', '\App\Controllers\PenanggungBiaya::index');
$routes->get('Provinsi', '\App\Controllers\Provinsi::index');
$routes->get('Kabupaten', '\App\Controllers\Kabupaten::index');
$routes->get('Kecamatan', '\App\Controllers\Kecamatan::index');
$routes->get('Kelurahan', '\App\Controllers\Kelurahan::index');
$routes->get('Asuransi', '\App\Controllers\Asuransi::index');
$routes->get('StatusPernikahan', '\App\Controllers\StatusPernikahan::index');
$routes->get('Poli', '\App\Controllers\Poli::index');
$routes->get('ICD10', '\App\Controllers\ICD10::index');
$routes->get('ICPC', '\App\Controllers\ICPC::index');
$routes->get('CabangKlinik', '\App\Controllers\CabangKlinik::index');

// $routes->options('(:any)', 'Controller/options');

// public function options($any)
// {
//     return $this->response->setHeader('Access-Control-Allow-Origin', '*') //for allow any domain, insecure
//         ->setHeader('Access-Control-Allow-Headers', '*') //for allow any headers, insecure
//         ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE') //method allowed
//         ->setStatusCode(200); //status code
// }
