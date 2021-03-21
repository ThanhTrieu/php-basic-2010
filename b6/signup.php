<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>signup member !</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
				<h1 class="text-center my-3"> Dang ky thanh vien !</h1>

				<h4 id="messages"></h4>

				<form id="frmSignup">
					<div class="border p-3">
						<div class="form-group">
							<lable>Username</lable>
							<input name="username" id="username" type="text" class="form-control"/>
						</div>
						<div class="form-group">
							<lable>Password</lable>
							<input name="password" id="password" type="password" class="form-control"/>
						</div>
						<div class="form-group">
							<lable>Email</lable>
							<input name="email" id="email" type="text" class="form-control"/>
						</div>
						<button id="register" type="submit" class="btn btn-primary"/>
							Dang ky
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#frmSignup').validate({
				// khai bao quy tac xu ly du lieu (rules)
				rules: {
					username: "required", // phai nhap DL
					password: "required", // phai nhap DL
					email: {
						required: true, // phai nhap DL
						email: true // bat buoc dung dinh dang email
					}
				},
				messages: {
					username: "Vui long nhap username",
					password: "Vui long nhap password",
					email: {
						required: "Vui long nhap email",
						email: "Email khong hop le"
					}
				},
				submitHandler: function(form){
					// xu ly ajax o day
					let user = $(form).find('input#username').val().trim();
					let pass = $(form).find('input#password').val().trim();
					let email = $(form).find('input#email').val().trim();
					$.ajax({
						url: 'server/register.php',
						type: "POST",
						data: {
							username: user,
							password: pass,
							email: email
						},
						beforeSend: function(){
							$(form).find('button#register').text('Dang xu ly...');
						}, success: function(res) {
							$(form).find('button#register').text('Dang ky');
							// ben phia register.php tra ve chuoi json nen o day can parseJSON de conver ve object trong js
							let response = JSON.parse(res);
							if(response.success !== ''){
								$('#messages').text(response.success);
							} else if(response.error !== '') {
								$('#messages').text(response.error);
							} else {
								$('#messages').text('');
							}
						}
					})
				}
			});
		});
	</script>
</body>
</html>