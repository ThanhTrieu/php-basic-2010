<?php 
require "ketqua.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ket qua xo so</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table width="100%" border="1" cellspacing="0" cellspadding="0">
		<tbody>
			<tr>
				<td width="10%">Đặc biệt</td>
				<td colspan="3"><?= $ketqua['db']; ?></td>
			</tr>
			<tr>
				<td width="10%">Giai nhat</td>
				<td colspan="3"><?= $ketqua['g1']; ?></td>
			</tr>
			<tr>
				<td width="10%">Giai nhi</td>
				<?php foreach($ketqua['g2'] as $key => $item): ?>
					<td><?= $item; ?></td>
				<?php endforeach; ?>
			</tr>
			<tr>
				<td width="10%">Giai ba</td>
				<td colspan="3">
					<?php foreach($ketqua['g3'] as $key => $item): ?>
						<tr>
							<td><?= $item[0]; ?></td>
							<td><?= $item[1]; ?></td>
							<td><?= $item[2]; ?></td>
						</tr>
					<?php endforeach; ?>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>