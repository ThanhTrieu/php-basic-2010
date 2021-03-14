<?php
// lam viec voi file
// mo file - chi cho phep doc file
/*
$path = "../database/db.txt";
$file = fopen($path, 'a');
if($file) {
	// echo 'mo file thanh cong';
	// doc du lieu nam trong file
	//$data = fread($file, filesize($path));
	//echo $data;
	
	fwrite($file, 'Hoc PHP');

	// doc du lieu vua ghi vao file
	// mo lai file can doc
	$file2 = fopen($path, 'r');
	$data = fread($file2, filesize($path));

	// dong file
	fclose($file2);
	fclose($file);
} else {
	echo 'mo file that bai';
}
*/
// mot so ham bo tro khac lam viec voi file
// 1-kiem tra xem file ton tai hay ko?
$path = "../database/db.txt";
if(file_exists($path)){
	echo 'file co ton tai';
} else {
	echo 'file ko ton tai';
}
echo '<br/>';

// 2-kiem tra xem file co dc ghi hay ko ?
if(is_writable($path)){
	echo 'co quyen ghi vao file';
	// file_put_contents($path, ' hoc php');
} else {
	echo 'khong co quyen ghi vao file';
}
// 3- doi ten file
if(file_exists($path)){
	//rename($path, '../database/mydb.txt');
	
}
// 4- copy file
copy('../database/mydb.txt', 'mydb.txt');

// 5 - xoa file
if(file_exists('mydb.txt')){
	unlink('mydb.txt');
}





