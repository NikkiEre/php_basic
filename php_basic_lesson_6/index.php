<?php

session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require 'Router/routes.php';

require_once $routes[$controller];