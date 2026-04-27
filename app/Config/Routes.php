<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'WebPages::home');
$routes->get('services', 'WebPages::services');
$routes->get('contact', 'WebPages::contact');
