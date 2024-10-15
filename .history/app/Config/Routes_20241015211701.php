<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::');
$routes->get('about','Home::about');
$routes->get('catalog','Home::catalog');