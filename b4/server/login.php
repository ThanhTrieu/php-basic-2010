<?php
// thuc su da bam button login chua
if(isset($_REQUEST['btnLogin'])){
	// lay du lieu tu form login gui len
	$user = $_REQUEST['username'] ?? '';
	$user = strip_tags($user);

	$pass = $_REQUEST['password'] ?? '';
	$pass = strip_tags($pass);

	if(empty($user) || empty($pass)){
		header('Location:../index3.php?state=error');
	} else {
		// kiem tra xem co trung khop voi file database hay ko?
		$file = fopen('database.txt','r');
		$dataFile = fread($file, filesize('database.txt'));
		fclose($file);
		$arrInfoFile = explode(';',$dataFile);
		if(!empty($arrInfoFile)){
			if($user == $arrInfoFile[0] && $pass == $arrInfoFile[1]){
				header('Location:../home.php');
			} else {
				header('Location:../index3.php?state=error');
			}
		} else {
			header('Location:../index3.php?state=error');
		}
	}
}