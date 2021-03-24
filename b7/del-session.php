<?php
	session_start();
	// remove all sessions
	// session_destroy();
	
	// remove one
	unset($_SESSION['username']);
?>
<a href="home.php"> goto Home.php</a>