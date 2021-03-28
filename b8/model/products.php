<?php
function getDataProductById($id = 0) {
	$products = [
		[
			'id' => 1,
			'name' => 'iphone SE 64GB',
			'price' => 10490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/230410/iphone-se-2020-trang-600x600-600x600.jpg',
			'qty' => 10
		],
		[
			'id' => 2,
			'name' => 'iphone XR 64GB',
			'price' => 12990000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg',
			'qty' => 15
		],
		[
			'id' => 3,
			'name' => 'iphone 12 256GB',
			'price' => 27490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-trang-new-600x600-600x600.jpg',
			'qty' => 5
		],
		[
			'id' => 4,
			'name' => 'iphone 11 64GB',
			'price' => 17490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-xi-do-600x600-600x600.jpg',
			'qty' => 5
		],
		[
			'id' => 5,
			'name' => 'iphone 12 Pro Max 128GB',
			'price' => 31490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/213033/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg',
			'qty' => 5
		],
		[
			'id' => 6,
			'name' => 'iphone X 256GB',
			'price' => 31990000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/172404/iphone-x-256gb-silver-600x600-ud-400x400.jpg',
			'qty' => 5
		]
	];
	// lay san pham trong database theo id cua no
	$info = [];
	foreach ($products as $k => $val) {
		if($val['id'] == $id){
			$info = $val;
			break;
		}
	}
	return $info;
}

function getAllDataProducts() {
	$products = [
		[
			'id' => 1,
			'name' => 'iphone SE 64GB',
			'price' => 10490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/230410/iphone-se-2020-trang-600x600-600x600.jpg',
			'qty' => 10
		],
		[
			'id' => 2,
			'name' => 'iphone XR 64GB',
			'price' => 12990000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg',
			'qty' => 15
		],
		[
			'id' => 3,
			'name' => 'iphone 12 256GB',
			'price' => 27490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/228737/iphone-12-trang-new-600x600-600x600.jpg',
			'qty' => 5
		],
		[
			'id' => 4,
			'name' => 'iphone 11 64GB',
			'price' => 17490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-xi-do-600x600-600x600.jpg',
			'qty' => 5
		],
		[
			'id' => 5,
			'name' => 'iphone 12 Pro Max 128GB',
			'price' => 31490000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/213033/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg',
			'qty' => 5
		],
		[
			'id' => 6,
			'name' => 'iphone X 256GB',
			'price' => 31990000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/172404/iphone-x-256gb-silver-600x600-ud-400x400.jpg',
			'qty' => 5
		]
	];
	return $products;
}