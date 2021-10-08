<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once './vendor/autoload.php';
require_once './utils/database.php';
require_once './utils/common.php';
\Utils\Routing::start($url);

?>