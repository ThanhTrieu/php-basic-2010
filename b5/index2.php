<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kiem tra ngay sinh nhat</title>
	
</head>
<body>

	<?php
		$mess = $_GET['mess'] ?? '';
		$day = $_GET['d'] ?? '';
		$day = is_numeric($day) ? $day : null;
		$birthday = $_GET['birthday'] ?? '';
	?>
	<div class="container">
		<h1> Kiem tra ngay sinh nhat</h1>

		<?php if($mess === 'happy'): ?>
			<h3>Chuc mung sinh nhat ban !</h3>
		<?php endif; ?>

		<?php if($mess === 'sad'): ?>
			<h3>Sinh nhat ban qua roi !</h3>
		<?php endif; ?>

		<?php if($mess === 'wait' && $day !== null): ?>
			<h3>Con <?= $day; ?> ngay nua toi sinh nhat !</h3>
		<?php endif; ?>

		<form method="post" action="server/check-date.php">
			<input type="date" name="birthday" placeholder="moi nhap ngay sinh cua ban" value="<?= $birthday; ?>" />
			<button type="submit" name="btnCheckDate"> Kiem tra</button>
		</form>
	</div>
</body>
</html>