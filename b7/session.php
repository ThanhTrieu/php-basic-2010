<?php
// khoi dong session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Session</title>
</head>
<body>
		<?php
			// tao ra 1 session
			$_SESSION['username'] = 'T3H - PHP';
		?>
		<a href="home.php"> goto home.php </a>
</body>
</html>