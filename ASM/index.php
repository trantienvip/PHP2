<?php

$ctrl = $_GET['ctrl'];
$action = $_GET['action'];
require_once('./controllers/'.$ctrl.'.php');
$controller = new $ctrl();
$controller->$action();

?>