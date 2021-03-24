<?php
session_start();
function checkUserLogin() {
	$userSession = getSessionUser();
	$cookieLogin = getCookieLogin();
	if(!empty($userSession) && !empty($cookieLogin)){
		return true;
	}
	return false;
}
function getSessionUser() {
	$user = $_SESSION['user'] ?? '';
	return $user;
}
function getCookieLogin() {
	$cookie = $_COOKIE['app_login'] ?? '';
	return $cookie;
}


