<?php
require_once('connection.php');
session_start();

if (isset($_POST['controller']) && isset($_POST['action']) ) {
	$controller = $_POST['controller'];
	$action 	= $_POST['action'];
}
elseif (isset($_GET['controller']) && isset($_GET['action'])) {
	$controller=$_GET['controller'];
	$action=$_GET['action'];
}
else{
	$controller = 'Home';
	$action 	= 'home';
}

require_once('View/layout.php');
?>
