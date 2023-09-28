<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');

$routes->get('StatusKeluarga', '\App\Controllers\StatusKeluarga::index');
$routes->get('StatusPekerjaan', '\App\Controllers\StatusPekerjaan::index');
$routes->get('StatusPendidikan', '\App\Controllers\StatusPendidikan::index');
$routes->get('KelompokPasien', '\App\Controllers\KelompokPasien::index');

// $routes->options('(:any)', 'Controller/options');

// public function options($any)
// {
//     return $this->response->setHeader('Access-Control-Allow-Origin', '*') //for allow any domain, insecure
//         ->setHeader('Access-Control-Allow-Headers', '*') //for allow any headers, insecure
//         ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE') //method allowed
//         ->setStatusCode(200); //status code
// }
