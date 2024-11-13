<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Routes for the application
$routes = [
    'auth/login' => 'AuthController@loginAction',
    'auth/logout' => 'AuthController@logoutAction',
    'home/index' => 'HomeController@indexAction',
];

// Routing function
function route($path) {
    global $routes;
    return $routes[$path] ?? 'home/index';
}

?>
