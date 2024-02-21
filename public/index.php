<?php
require '../helpers.php';

$routes = basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];

require basePath('router.php');
