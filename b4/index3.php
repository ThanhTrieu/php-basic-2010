<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login user</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$stateErr = $_GET['state'] ?? '';
	?>
	<?php if($stateErr === 'error'): ?>
		<h4 style="color:red;">Tai khoan khong ton tai</h4>
	<?php endif; ?>
	<form method="post" action="server/login.php">
		<lable>user</lable>
		<input type="text" name="username" />
		<br/>
		<lable>pass</lable>
		<input type="password" name="password" />
		<br/>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>



