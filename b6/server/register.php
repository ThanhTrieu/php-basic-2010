<?php
$user = $_POST['username'] ?? '';
$user = strip_tags($user);

$pass = $_POST['password'] ?? '';
$pass = strip_tags($pass);

$email = $_POST['email'] ?? '';
$email = strip_tags($email);

$data= [];
$data['err_user'] = '';
$data['err_pass'] = '';
$data['err_email'] = '';
$data['success'] = '';
$data['error'] = '';

if(empty($user)){
	$data['err_user'] = 'vui long nhap username';
}
if(empty($pass)){
	$data['err_pass'] = 'vui long nhap mat khau';
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$data['err_email'] = 'Vui long nhap dung dinh dang la email';
}
if(empty($data['err_user']) && empty($data['err_pass']) && empty($data['err_email'])){
	// tien hanh ghi du lieu vao file
	$dataFile = $user.';'.$pass.';'.$email.'|';
	$file = fopen('database.txt', 'a+');
	if($file){
		$write = fwrite($file, $dataFile);
		fclose($file);
		if($write){
			$data['success'] = 'Dang ky thanh vien thanh cong';
		} else {
			$data['error'] = 'Dang ky thanh vien that bai';
		}
	} else {
		$data['error'] = 'Dang ky thanh vien that bai';
	}

} else {
	$data['error'] = 'Dang ky thanh vien that bai';
}
// bien mang ve chuoi co dinh dang la chuoi json , gan giong object cua js
echo json_encode($data);


