<?php
	// nhung file index.2php vao day
	require "index2.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>view</title>
</head>
<body>
	<h1>Thong tin sinh vien</h1>
	<table width="100%" border="1" cellspacing="0" cellspadding="0">
		<thead>
			<tr>
				<th>MSV</th>
				<th>HT</th>
				<th>Email</th>
				<th>SDT</th>
				<th>GT</th>
				<?php if($viewMoney): ?>
					<th>Tien</th>
				<?php endif; ?>
			</tr>
		</thead>
		<tbody>
			<?php $sumMoney = 0; ?>
			<?php foreach($students as $key => $item): ?>
				<?php $sumMoney += $item['money']; ?>
				<tr>
					<td><?= $item['id']; ?></td>
					<td><?= $item['name']; ?></td>
					<td><?= $item['email']; ?></td>
					<td><?= $item['phone']; ?></td>
					<td><?= $item['gender'] == 1 ? 'Nam' : 'Nu'; ?></td>
					<?php if($viewMoney): ?>
						<td><?= number_format($item['money']); ?></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<?php if($viewMoney): ?>
		<tfoot>
			<tr>
				<td colspan="5">Tong tien</td>
				<td><?= number_format($sumMoney); ?></td>
			</tr>
		</tfoot>
		<?php endif; ?>
	</table>
</body>
</html>