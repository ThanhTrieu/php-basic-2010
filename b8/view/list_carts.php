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
							<?php $totalMoney = 0; ?>
							<?php foreach ($carts as $key => $item): ?>
								<?php $totalMoney += ($item['price']*$item['qty']); ?>
								<tr>
									<td><?= $item['id']; ?></td>
									<td><?= $item['name'];?></td>
									<td>
										<img src="<?= $item['img']; ?>" class="img-responsive w-25" alt="<?= $item['name']; ?>" />
									</td>
									<td><?= number_format($item['price']); ?></td>
									<td>
										<input id="qty_<?= $item['id']; ?>" type="number" value="<?= $item['qty'] ?>"/>
									</td>
									<td>
										<?= number_format($item['price']*$item['qty']); ?>
									</td>
									<td class="text-center">
										<a href="index.php?c=cart&m=remove&id=<?= $item['id']; ?>"class="btn btn-danger">xoa</a>
										<button onClick="updateCart(<?= $item['id']; ?>)" class="btn btn-info">cap nhat</button>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5">Tong tien</td>
								<td colspan="3"> <?= number_format($totalMoney); ?> </td>
							</tr>
						</tfoot>
					</table>
				</div>
				<a class="btn btn-primary" href="index.php"> Tiep tuc mua hang</a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function updateCart(id){
			let qty = document.getElementById('qty_'+id).value;
			window.location.href = "index.php?c=cart&m=update&id="+id+"&qty="+qty;
		}
	</script>
</body>
</html>