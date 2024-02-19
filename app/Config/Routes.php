<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

foreach(glob(ROOTPATH.'Modules/*/Config/Routes.php') as $file){
    require $file;
}
