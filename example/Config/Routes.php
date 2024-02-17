<?php

//...  

//CHANGE MODULE NAME "EXAMPLE"
$routes->group("example", ["namespace" => "\Modules\Example\Controllers"], function ($routes) {

    // welcome page - URL: /example
    $routes->get("/", "Home::index");
    $routes->get("/(:any)", "Home::$1");

});
