<?php
$test = "SADsds12DD";
// viet 1 bieu chinh quy kiem tra xem trong chuoi co chua con so hay ko?
//$expression = '/[0-9]/';

$expression = '/^[1-9]\d{3}[0,5]$/';
$number = '12345';

// if(preg_match_all($expression, $number, $macth)){
// 	print_r($macth);
// } else {
// 	echo 'ko tim thay';
// }

// kiem tra trong chuoi co ton tai so dien thoai cua nha mang viettel hay ko?
$string = '0975091000';

$exp = '/^0(3\d|9[6-8])\d{7}$/mi';
// if(preg_match_all($exp, $string, $macth)){
// 	echo '<pre>';
// 	print_r($macth);
// } else {
// 	echo 'ko tim thay';
// }
// dd/mm/yyyy
$d = '06/04/2021';
// can viet btcq kiem tra dinh dang ngay thang
$exp2 = '/^(0[1-9]|[1,2]\d|3[0,1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/mi';

if(preg_match($exp2, $d, $macth)){
	echo '<pre>';
	print_r($macth);
} else {
	echo 'ko tim thay';
}
// viet bieu thuc chinh quy kiem tra account cua user voi dieu kien sau: toi thieu tu 3-8 ki tu. chi la chu thuong
$account = 'ad_min';
$exp3 = '/^[a-z_]{3,8}$/';
if(preg_match($exp3, $account, $macth)){
	echo '<pre>';
	print_r($macth);
} else {
	echo 'ko tim thay';
}


