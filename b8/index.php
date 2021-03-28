<?php
session_start();

define('ROOT_PATH', 'index.php');

$c = $_GET['c'] ?? 'home';
$m = $_GET['m'] ?? 'index';
//http://localhost:90/php2010/b8/index.php?c=home&m=index

switch ($c) {
	case 'home':
		require 'controller/home.php';
		$m();
		break;
	case 'cart':
		require 'controller/cart.php';
		$m();
	break;
	default:
		require 'error.php';
		break;
}