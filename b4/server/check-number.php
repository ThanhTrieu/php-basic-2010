<?php 
if(isset($_GET['btnCheck'])){
	// lay so gui len
	// kiem tra phai la so
	// goi ham kiemTraSoNT
}

function kiemTraSoNT($number) {
	if($number <= 1){
		return false;
	}
	if($number == 2) {
		return true;
	}
	for($i = 2; $i <= sqrt($number); $i++){
		if($number % $i == 0){
			return false;
		}
	}
	return true;
}