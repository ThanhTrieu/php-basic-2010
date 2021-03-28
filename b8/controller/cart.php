<?php
require 'model/products.php';

function add() {
	$id = $_GET['id'] ?? '';
	$id = is_numeric($id) ? $id : 0;
	$detail = getDataProductById($id);
	if(empty($detail)){
		header('Location:index.php?c=error');
	} else {
		// them san pham vao gio hang
		if(!isset($_SESSION['cart'])){
			// lan dau tao gio hang
			$_SESSION['cart'][$id]['name']  = $detail['name'];
			$_SESSION['cart'][$id]['img']   = $detail['image'];
			$_SESSION['cart'][$id]['price'] = $detail['price'];
			$_SESSION['cart'][$id]['id']  = $id;
			$_SESSION['cart'][$id]['qty'] = 1;

		} else {
			// gio hang da ton tai
			// kiem tra xem san pham them vao gio hang da co trong gio hang chua ?
			if(isset($_SESSION['cart'][$id])){
				// da ton tai - chi cap nhat lai so luong mua cua chinh san pham day
				$_SESSION['cart'][$id]['qty'] += 1;
			} else {
				// chua ton tai
				$_SESSION['cart'][$id]['name']  = $detail['name'];
				$_SESSION['cart'][$id]['img']   = $detail['image'];
				$_SESSION['cart'][$id]['price'] = $detail['price'];
				$_SESSION['cart'][$id]['id']  = $id;
				$_SESSION['cart'][$id]['qty'] = 1;
			}
		}
		// quay ve xem co san pham nao trong gio hang vua them
		header('Location:index.php?c=cart&m=index');
	}
}

function index(){
	$carts = $_SESSION['cart'] ?? [];
	require 'view/list_carts.php';
}


