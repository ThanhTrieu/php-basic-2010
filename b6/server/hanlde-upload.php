<?php
function hanldeUpload(){
	define('PATH_UPLOAD', '../uploads/images/');

	if(isset($_POST['btnUpload'])){
		if(isset($_FILES['file'])){
			$nameFile = $_FILES['file']['name'];
			$tmpFile = $_FILES['file']['tmp_name'];
			$typeFile = $_FILES['file']['type'];
			$sizeFile = $_FILES['file']['size'];

			if(!empty($tmpFile)){
				if(checkTypeFile($typeFile) && checkSizeFile($sizeFile)) {
					$up = move_uploaded_file($tmpFile, PATH_UPLOAD . $nameFile);
					if($up){
						header("Location:../upload.php?mess=success");
					} else {
						header("Location:../upload.php?mess=fail");
					}
				} else {
					header("Location:../upload.php?mess=over_size");
				}
			} else {
				header("Location:../upload.php?mess=err");
			}
		}
	}
}

// check type file
function checkTypeFile($typeFile = '') {
	$arrTypeFile = ['image/jpeg','image/png','image/jpg','image/gif'];
	if(in_array($typeFile,$arrTypeFile)){
		return true;
	}
	return false;
}
// check size file
function checkSizeFile($sizeFile) {
	// $sizeFile: kb <= 5M
	if($sizeFile <= 5*1024){
		return true;
	}
	return false;
}


hanldeUpload();
