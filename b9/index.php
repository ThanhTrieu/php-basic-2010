<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Send email</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
				<h1 class="text-center my-3">Send Email</h1>
				<form class="border p-3" action="server/sendmail-v2.php" method="post">
					<div class="form-group">
						<lable for="email">Email</lable>
						<input class="form-control" type="email" name="email" id="email" />
					</div>
					<div class="form-group">
						<lable for="subject">Subject</lable>
						<input class="form-control" type="text" name="subject" id="subject" />
					</div>
					<div class="form-group">
						<lable for="content">Content</lable>
						<textarea name="content" id="content"class="form-control" rows="8"></textarea>
					</div>
					<button class="btn btn-primary" type="submit" name="btnSend">Send</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>