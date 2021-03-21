<?php 
$url = "http://php.net";
// kiem tra xem no co phai la 1 url
if(filter_var($url, FILTER_VALIDATE_URL)){
	echo 'Dung la URL';
} else {
	echo 'Khong phai URL';
}
echo "<br/>";

$email = "test@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo 'Dung la Email';
} else {
	echo 'Khong phai Email';
}
echo "<br/>";

// xoa bo cac du lieu ko hop le
$email2 = "test@@gmail.com";
$newEmail = filter_var($email2, FILTER_SANITIZE_EMAIL);
echo $newEmail;
echo "<br/>";

$url2 = "http::://php*&@#$%~!.nết///";
$newUrl = filter_var($url2, FILTER_SANITIZE_URL);
echo $newUrl;


