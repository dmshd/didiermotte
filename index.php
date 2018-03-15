<?php  

define('VIEW', 'view/');
define('CONTROLLER', 'controller');

$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';
