<?php
require 'data.php';

$keyword = $_POST['keyword'] ?? '';
$keyword = strip_tags($keyword);

// lay thong tin ca sy theo tu khoa tim kiem
$info = [];
foreach ($singers as $key => $val) {
	if($keyword == $val['name']){
		$info = $val;
	}
}

// load view - tra ket qua ve la HTML
require '../view/result_view.php';