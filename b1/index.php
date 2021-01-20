<?php
	/*
	 	<?php : the mo
		?> : the dong
	*/
	// echo "Hello word";
	$myName = 'T3H';
	// dung dang sau ky tu $ khong phai la so hay la khoang trang
	$MyName = 'AAAA';
	$my_name = 'bbbbb';
	$a = 'check';
	$check = 'hello';
	// echo $$a; // hello
	// khai bao hang so
	const PI = 3.14;
	define('MY_NAME', 'Teo');
	// echo PI . MY_NAME;

	// kiem tra xem hang so co ton tai ko ?
	if(defined('MY_NAME')) {
		echo 'Hang so da dc dinh nghia';
	} else {
		echo 'Hang so chua dc dinh nghia';
	}
	// php co the render - tao ra ma html
	echo "<br/>"; // trinh duyet no doc hieu the br
	echo "<h1> day la the h1</h1>";
	echo "<br/>";
	$number = 10;
	$string = 'Hello';
	$checking = true;
	$test123 = null;
	// kiem tra kieu du lieu
	echo gettype($number);
	echo "<br/>";
	echo gettype($string);
	echo "<br/>";
	echo gettype($checking);
	echo "<br/>";
	echo gettype($test123);
	echo "<br/>";
	echo gettype(PI);
	echo "<br/>";

	$myMoney = null; // '' == false == 0
	if(empty($myMoney)){
		echo 'oke';
	} else {
		echo 'fail';
	}
	// kiem tra 1 bien co ton tai hay ko?
	echo "<br/>";
	if(isset($myMoney)){
		echo 'Yes';
	} else {
		echo 'No';
	}
	echo "<br/>";	
	$a = '10'; // number string
	$b = 20;
	$c = $a + $b;
	echo $c;

	echo "<br/>";	
	// is_numeric: kiem tra la 1 so hay chuoi so hay ko ?
	if(is_numeric($a)){
		echo 'dung la chuoi so hoac la so';
	} else {
		echo 'khong la so hoac khong phai la chuoi so';
	}

	echo "<br/>";
	$a1 = 9;
	$b1 = 9;
	$c1 = $a1 <=> $b1;
	echo $c1;
	echo "<br/>";

	$x = 10;
	$z = 9;
	$y = $z ?? $x;
	// $y = isset($z) ? $z : $x;
	echo $y;










