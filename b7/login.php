<?php
	require 'helper.php';
	if(checkUserLogin()){
		header('Location:dashboard.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="../b6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">

				<h3 class="text-center my-3"> Login user</h3>
				<form class="border p-3" action="server/handle-login.php" method="post">

					<div class="form-group">
						<lable>username</lable>
						<input type="text" name="username" class="form-control"/>
					</div>
					<div class="form-group">
						<lable>password</lable>
						<input type="password" name="password" class="form-control"/>
					</div>
					<div class="form-group">
						<lable for="remember">remember me</lable>
						<input id="remember" type="checkbox" name="remember"/>
					</div>
					<button class="btn btn-primary" type="submit" name="btnLogin">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>