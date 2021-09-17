<?php

$crtl = $_GET['crtl'];
$action = $_GET['action'];
require('./controllers/'.$crtl.'.php');
$controllers = new $crtl();
echo $controllers->$action();

?>