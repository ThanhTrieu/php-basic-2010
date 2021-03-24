<?php
	require 'helper.php';
	
	if(!checkUserLogin()) {
		header('Location:login.php');
		exit();
	}

	$user = $_SESSION['user'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>dashboard</title>
	<link rel="stylesheet" href="../b6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1> Welcome <?= $user; ?> to dashboard</h1>
				<form action="server/logout.php" method="post">
					<button type="submit" name="btnLogout">Logout</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>