<?php
function hanldeUpload(){
	define('PATH_UPLOAD', '../uploads/images/');

	if(isset($_POST['btnUpload'])){
		// echo '<pre>';
		// print_r($_FILES);
		// die;
		if(isset($_FILES['file'])){
			$nameFile = $_FILES['file']['name'];
			$tmpFile = $_FILES['file']['tmp_name'];
			if(!empty($tmpFile)){
				$up = move_uploaded_file($tmpFile, PATH_UPLOAD . $nameFile);
				if($up){
					header("Location:../upload.php?mess=success");
				} else {
					header("Location:../upload.php?mess=fail");
				}
			} else {
				header("Location:../upload.php?mess=err");
			}
		}
	}
}
hanldeUpload();
