<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pegawai::index', ['filter' => 'login']);
// $routes->get('/home', 'Home::index', ['filter' => 'login']);
$routes->get('/pegawai', 'Pegawai::index', ['filter' => 'login']);
$routes->get('/pegawai/hapus/(:num)', 'Pegawai::hapus/$1');
$routes->post('/pegawai/simpan', 'Pegawai::simpan');
$routes->get('/pegawai/edit/(:any)', 'Pegawai::edit/$1');
