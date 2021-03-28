<?php if(!defined('ROOT_PATH')) { exit('can not access'); } ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List products</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center my-3"> Danh sach san pham</h2>
				<div class="row">
					<?php foreach($allProducts as $key => $item): ?>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 my-2">
								<div class="card">
									<img src="<?= $item['image']; ?>" class="card-img-top" alt="<?= $item['name']; ?>">
									<div class="card-body">
								    <h5 class="card-title"><?= $item['name']; ?></h5>
								    <p class="card-text"><?= number_format($item['price']) ?></p>
								    <a href="index.php?c=cart&m=add&id=<?= $item['id']; ?>" class="btn btn-primary">Them vao gio hang</a>
								  </div>
								</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>