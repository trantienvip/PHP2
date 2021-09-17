<?php

$ctrl = $_GET['ctrl'];
$act = $_GET['action'];
require_once('./controllers/'. $ctrl.'.php');
$controllers = new $ctrl();
// echo var_dump($controllers->$act());
echo $controllers->$act();

// Tương đương

// $ctrl = 'HomeController';
// $act = 'index';
// require_once('./controllers/HomeController.php');
// $controllers = new HomeController();
// echo $controllers->index();



?>