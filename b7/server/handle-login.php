<?php
// khoi dong session
session_start();

function checkLogin() {
	if(isset($_POST['btnLogin'])){
		$user = $_POST['username'] ?? '';
		$user = strip_tags($user);

		$pass = $_POST['password'] ?? '';
		$pass = strip_tags($pass);

		$remember = $_POST['remember'] ?? '';
		$remember = strip_tags($remember);

		if(empty($user) || empty($pass)){
			header('Location:../login.php?state=fail');
		} else {
			if($user === 'admin' && $pass === '123'){
				if($remember === 'on'){
					// setcookie
					setcookie('app_login', 'app_login', time()+300, "/", "", 0);
				} else {
					// setcookie
					setcookie('app_login', 'app_login', time()+10, "/", "", 0);
				}
				// tao session luu thong tin can dung
				$_SESSION['user'] = $user;
				// quay vao trang dashboard.php
				header('Location:../dashboard.php');

			} else {
				header('Location:../login.php?state=error');
			}
		}
	}
}
checkLogin();
