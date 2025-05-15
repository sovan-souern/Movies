<?php
require_once 'Router.php';
require_once 'Controllers/HomeController.php';
require_once 'Controllers/AboutController.php';
require_once 'Controllers/MoviesController.php';

$routes = new Router();

$routes->get('/home', [HomeController::class, 'index']);
$routes->get('/about', [AboutController::class, 'index']);
$routes->get('/movies', [MoviesController::class, 'index']);





$routes->dispatch();
