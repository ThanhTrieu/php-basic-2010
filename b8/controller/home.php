<?php
require 'model/products.php';

function index() {
	$allProducts = getAllDataProducts();

	// load view
	require 'view/list_products.php';
}