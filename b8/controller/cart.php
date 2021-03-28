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

function remove() {
	$id = $_GET['id'] ?? '';
	$id = is_numeric($id) ? $id : 0;
	// xoa san pham co ma id nay trong gio hang
	// kiem tra xem co ton tai ko ?
	if(isset($_SESSION['cart'][$id])){
		unset($_SESSION['cart'][$id]);
	}
	// quay ve xem co san pham nao trong gio hang vua xoa
	header('Location:index.php?c=cart&m=index');
}

function update(){
	$id = $_GET['id'] ?? '';
	$id = is_numeric($id) ? $id : 0;

	$qty = $_GET['qty'] ?? '';
	$qty = (is_numeric($qty) && $qty > 0 && $qty < 10)  ? $qty : 1;

	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['qty'] = $qty;
	}
	header('Location:index.php?c=cart&m=index');
}

function index(){
	$carts = $_SESSION['cart'] ?? [];
	require 'view/list_carts.php';
}


