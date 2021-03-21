<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload file to server</title>
</head>
<body>
	<form method="post" action="server/hanlde-upload.php" enctype="multipart/form-data">
		<lable> Moi chon file</lable>
		<input type="file" name="file" id="file"/>
		<button type="submit" name="btnUpload"> Upload </button>
	</form>
</body>
</html>