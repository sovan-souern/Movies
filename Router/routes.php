<?php
require_once 'Router.php';
require_once 'Controllers/HomeController.php';
require_once 'Controllers/AboutController.php';
require_once 'Controllers/MoviesController.php';
require_once 'Controllers/ActionController.php';
require_once 'Controllers/AdventureController.php';
require_once 'Controllers/AnimationController.php';     
require_once 'Controllers/ComedyController.php';
require_once 'Controllers/DramaController.php';
require_once 'Controllers/HorrorController.php';
require_once 'Controllers/SignInController.php';
require_once 'Controllers/SignUpController.php';



$routes = new Router();

// $routes->get('/home', [HomeController::class, 'index']);
$routes->get('/about', [AboutController::class, 'index']);
$routes->get('/movies', [MoviesController::class, 'index']);

$routes->get('/categories/action', [ActionController::class, 'index']);
$routes->get('/categories/adventure', [AdventureController::class, 'index']);  
$routes->get('/categories/animation', [AnimationController::class, 'index']);
$routes->get('/categories/comedy', [ComedyController::class, 'index']);
$routes->get('/categories/drama', [DramaController::class, 'index']);
$routes->get('/categories/horror', [HorrorController::class, 'index']);
$routes->get('/', [SignInController::class, 'index']);
$routes->get('/signup', [SignUpController::class, 'index']);
$routes->get('/home', [HomeController::class, 'index']);







$routes->dispatch();
