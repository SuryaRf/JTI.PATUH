<?php

// Load the routes and core classes
require_once 'app/core/Core.php';     // Core class with base functionalities
require_once 'app/core/Controller.php'; // Base controller class
require_once 'app/core/Model.php';     // Base model class
require_once 'routes.php';             // Routes file

// Instantiate Core to handle the current route
$core = new Core();
$core->handleRequest();
?>
