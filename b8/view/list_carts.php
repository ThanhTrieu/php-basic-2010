<?php if(!defined('ROOT_PATH')) { exit('can not access'); } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carts</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center my-3"> Danh sach san pham trong gio hang</h2>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th> # </th>
								<th> San pham</th>
								<th> Hinh anh</th>
								<th> Don gia</th>
								<th> So luong</th>
								<th> Thanh Tien</th>
								<th colspan="2" width="18%" class="text-center"> Thao tac </th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($carts as $key => $item):?>
								<tr>
									<td><?= $item['id']; ?></td>
									<td><?= $item['name'];?></td>
									<td>
										<img src="<?= $item['img']; ?>" class="img-responsive w-25" alt="<?= $item['name']; ?>" />
									</td>
									<td><?= number_format($item['price']); ?></td>
									<td>
										<input type="number" value="<?= $item['qty'] ?>"/>
									</td>
									<td>
										<?= number_format($item['price']*$item['qty']); ?>
									</td>
									<td class="text-center">
										<button class="btn btn-danger">xoa</button>
										<button class="btn btn-info">cap nhat</button>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5">Tong tien</td>
								<td colspan="3"> 121323223 </td>
							</tr>
						</tfoot>
					</table>
				</div>
				<a class="btn btn-primary" href="index.php"> Tiep tuc mua hang</a>
			</div>
		</div>
	</div>
</body>
</html>