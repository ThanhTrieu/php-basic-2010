<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>cookie test</title>
</head>
<body>
	<?php
		// lay cookie ma tu ben file cookie.php tao ra
		$cookie = $_COOKIE['T3H'] ?? '';
		// lay session ma tu ben file session.php tao ra
		$session = $_SESSION['username'] ?? '';
	?>
	<h1>My cookie: <?= $cookie; ?></h1>
	<h1>My session: <?= $session; ?></h1>

	<a href="cookie.php"> cookie </a>
	<a href="del-cookie.php"> xoa cookie</a>
	<br/>
	<a href="del-session.php"> xoa session</a>
</body>
</html>