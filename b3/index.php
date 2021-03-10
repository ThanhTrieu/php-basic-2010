<?php
// cac ham lam viec voi mang trong php
$infoStudents = [
	'name' => 'Van Teo',
	'age' => 20,
	'email' => 'van@gmail.com'
];
echo "<pre>";
// 1 - CASE_UPPER
// 0 - CASE_LOWER
// chuyen doi key cua mang ve chu hoa hoac chu thuong
print_r(array_change_key_case($infoStudents,CASE_UPPER));

// tra ve mot mang dem so luong phan tu giong nhau trong mang
$number = [1,2,3,1,2,3,4,5,6,1,1,1,9];
print_r(array_count_values($number));

// them phan 100 vao tri cuoi cung cua mang
array_push($number, 100);
print_r($number);

// xoa phan tu cuoi cung cua mang
$lastEl = array_pop($number);
print_r($number);
echo "<br/>";
echo $lastEl;
echo "<br/>";

// them phan tu vao dau mang
array_unshift($number, $lastEl);
print_r($number);

// xoa phan tu dau tien cua mang
$firstEl = array_shift($number);
print_r($number);
echo "<br/>";
echo $firstEl;
echo "<br/>";

$newArr = array_chunk($number, 3);
print_r($newArr);

// kiem tra xem co phai mang ko
if(is_array($newArr)){
	echo "This is an array";
} else {
	echo "Not an array";
}
echo "<br/>";

// tim kiem phan tu co nam trong mang ko?
$test = ['blue','green',1,2,3];
if(in_array(2, $test)){
	echo "tim thay";
} else {
	echo "ko tim thay";
}
echo "<br/>";

// kiem tra xem key co nam trong mang ko?
$cat = ['name' => 'tom', 'age' => 2];
if(array_key_exists('age', $cat)){
	echo "tim thay key trong mang";
} else {
	echo "ko tim thay key trong mang";
}

// tra ve mot mang moi ko chua cac phan tu trung lap nhau
$numberv2 = [1,2,3,1,2,3,4,'b',5,6,1,1,1,9];
$uniqueArr = array_unique($numberv2);
print_r($numberv2);
print_r($uniqueArr);
echo "<br/>";
$sum = array_sum($uniqueArr);
echo $sum;

//tach mang con tu mang cho truoc
$chilArr = array_slice($numberv2, 6, 3, false);
print_r($numberv2);
print_r($chilArr);
echo "<br/>";

// thay the cac phan tu trong mang
$numberv3 = [1,2,3,1,2,3,4,5,6,1,1,1,9];
array_splice($numberv3,9,3,[100,200,300]);
print_r($numberv3);
echo "<br/>";

// lay ra phan tu cuoi cung cua mang nhung ko xoa no
$end = end($numberv3);
print_r($numberv3);
echo "<br/>";
echo $end;

// sap xep mang - theo gia tri
$sort = ['name' => 'Teo', 'age' => 1, 'phone' => 2];
//arsort($sort); // giam dan
//asort($sort); // tang dan
//print_r($sort);

// sap xep mang - key
ksort($sort); // tang dan
// krsort($sort); // giam dan
print_r($sort);

// BTNV : tu viet ham sap xep mang theo cac thuat toan ma cac ban biet




