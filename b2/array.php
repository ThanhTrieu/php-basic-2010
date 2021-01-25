<?php
// khai bao mang
// 1 - mang tuan tu enumerative  array
$friuts = ['cam', 'quyt', 'dua', 'le'];
$friuts2 = array('cam', 'quyt', 'dua', 'le');
echo "<pre>";
print_r($friuts);
//echo "</pre>";
// 2 - mang khong tuan tu
$infoStudent = [
	'id' => 1,
	'name' => 'Van Teo',
	'age' => 20,
	'email' => 'vanteo@gmail.com'
];
print_r($infoStudent);
// mang da chieu
$infoStudents = [
	[
		'id' => 1,
		'name' => 'Van Teo',
		'age' => 20,
		'email' => 'vanteo@gmail.com',
		'class' => [
			[
				'name_class' => 'php',
				'teacher' => 'A'
			],
			[
				'name_class' => 'JS',
				'teacher' => 'B'
			]
		]
	],
	[
		'id' => 2,
		'name' => 'Van Ty',
		'age' => 20,
		'email' => 'vanty@gmail.com',
		'class' => [
			[
				'name_class' => 'php',
				'teacher' => 'A'
			],
			[
				'name_class' => 'JS',
				'teacher' => 'B'
			]
		]
	]
];
print_r($infoStudents);
// truy cap vao 1 phan tu trong mang
// nameArray[index];
// echo chi su dung voi string
// print_r: dung cho mang
// echo $friuts[3];
//echo $infoStudents[0]['class'][0]['name_class'];
// duyet qua tat ca phan tu cua mang
// foreach
$arrNumber = [1,2,3,4,5,6,7,8,9];
foreach ($arrNumber as $key => $item) {
	echo "index - {$key} : value - {$item}";
	echo "<br/>";
}

$sport = ['money' => 1000];
// bo sung cac key : value vao mang
$sport['name'] = ['tennis', 'football', 'chess'];
$sport['place'] = 'USA';
print_r($sport);
// bieu dien thong tin cua 3 nguoi nhan vien duoi dang 1 mang voi nhung thong in nhu sau :
// id: ma nhan vien
// name: HT
// address: DC
// email:
// room_id : ma phong ban
$staff = [
	[
		'id' => 1,
		'name' => 'Van Teo',
		'address' => 'Ha Noi',
		'email' => 'vanteo@gmail.com',
		'room_id' => 101
	],
	[
		'id' => 2,
		'name' => 'Van Ty',
		'address' => 'Ha Nam',
		'email' => 'vanty@gmail.com',
		'room_id' => 102
	],
	[
		'id' => 3,
		'name' => 'Thi A',
		'address' => 'Hai Duong',
		'email' => 'thia@gmail.com',
		'room_id' => 103
	]
];
// bieu dien thong tin cua 4 phong duoi dang 1 mang voi nhung thong in nhu sau :
// id: ma phong
// name: ten phong
// leader: DC
// date: 2018-01-10
$rooms = [
	[
		'id' => 101,
		'name' => 'IT',
		'leader' => 'Van B',
		'date' => 2018-01-10
	],
	[
		'id' => 102,
		'name' => 'Hanh chinh - Ke Toan',
		'leader' => 'Thi C',
		'date' => 2017-01-10
	],
	[
		'id' => 103,
		'name' => 'Nhan su',
		'leader' => 'Thi C',
		'date' => 2017-03-10
	],
	[
		'id' => 104,
		'name' => 'Bao ve',
		'leader' => 'Van D',
		'date' => 2019-03-10
	]
];
// hien thi thong tin cua nhan vien va cho biet nhan do thuoc phong nao va sep la ai?
foreach ($staff as $key => $val) {
	foreach ($rooms as $k => $item) {
		// tim phong cua cac nhan vien tuong ung voi ma phong
		if($val['room_id'] == $item['id']) {
			// bo sung them thong tin ten phong va ten sep cua phong do vao mang thong tin cua nhan vien tuong ung
			$staff[$key]['name_room'] = $item['name'];
			$staff[$key]['leader_room'] = $item['leader'];
		}
	}
}
print_r($staff);






