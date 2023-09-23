<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Ubigeo::index');

$routes->group('ubigeo', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('jsonprovincias/(:num)', 'Ubigeo::jsonProvincias/$1');
    $routes->get('jsondistritos/(:num)', 'Ubigeo::jsonDistritos/$1');
});
