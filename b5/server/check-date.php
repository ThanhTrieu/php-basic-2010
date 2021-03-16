<?php
if(isset($_POST['btnCheckDate'])){
	// lay ngay thang sinh nhat
	$birthday = $_POST['birthday'] ?? '';

	// $birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
	
	$birthday = strip_tags($birthday);

	if(!empty($birthday)){
		$currentYear = date('Y');
		$arrDate = explode('-',$birthday);
		$strBirthday = $currentYear.'-'.$arrDate[1].'-'.$arrDate[2];
		$today = date('Y-m-d');

		$timeBirthday = strtotime($strBirthday);
		$timeToday = strtotime($today);
		if($timeBirthday == $timeToday){
			header('Location:../index2.php?mess=happy&birthday='.$birthday);
		} elseif($timeBirthday > $timeToday) {
			// tinh con bao ngay nua toi sinh nhat
			$day = ($timeBirthday-$timeToday)/86400;
			header('Location:../index2.php?mess=wait&d='.$day.'&birthday='.$birthday);
		} else {
			header('Location:../index2.php?mess=sad&birthday='.$birthday);
		}

	} else {
		header('Location:../index2.php?mess=error');
	}
}