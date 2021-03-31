<?php
// thanhtrieut3h@gmail.com
function mySendmail(){
	if(isset($_POST['btnSend'])){
		$toEmail = $_POST['email'] ?? '';
		$toEmail = strip_tags($toEmail);

		$subject = $_POST['subject'] ?? '';
		$subject = strip_tags($subject);

		$content = $_POST['content'] ?? '';

		// validate data
		$chkEmail = filter_var($toEmail, FILTER_VALIDATE_EMAIL);
		if(!$chkEmail || empty($subject) || empty($content)){
			header('Location:../index.php?state=error');
		} else {
			if(sendToEmail($toEmail, $subject, $content)){
				header('Location:../index.php?state=ok');
			} else {
				header('Location:../index.php?state=fail');
			}
		}
	}
}

function sendToEmail($toEmail, $subject, $content){
	$header = "From:trieuntgvt3h@gmail.com \r\n"; 
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n"; 
	$send = mail ($toEmail,$subject,$content,$header);
	if($send){
		return true;
	}
	return false;
}

mySendmail();