<?php
	declare(strict_types = 1);
	// thong bao loi khi su dung cu phap php 7.0 tro len

	// dinh nghia ham trong php
	// 1 - ham su dung cho tat ca cac phien ban php
	function sumNumber($a, $b) {
		return $a + $b;
	}
	$sum = sumNumber(1,2);
	// echo $sum;
	
	// 2 - ham su dung php 7.0 tro len
	function kiemTraChanLe(string $number) : int {
		if($number % 2 == 0){
			return 1;
		}
		return 0;
	}
	$n = '10';
	if(kiemTraChanLe($n)){
		echo 'So chan';
	} else {
		echo 'So le';
	}
	// viet ham theo chuan php 7 kiem tra 1 so co phai la so chinh phuong hay ko?
	function kiemTraSoCP(float $n) : boolean {
		$result = sqrt($n);
		if(is_int($result)){
			return true;
		}
		return false;
	}
	echo '<br/>';
	// bien toan cuc va bien cuc bo
	
	$hello = 'hello'; // global : pham vi hoat dong o moi noi ke tu noi no duoc khai bao
	function sayHello() {
		global $hello;
		$goodbye = 'goodbye'; // local : pham vi hoat dong noi bo trong ham
		// su dung 1 bien global tu ben ngoai vao trong ham
		echo $hello . $goodbye;
	}
	sayHello();
	// su dung bien static trong function

	function myCount() {
		static $c = 0;
		// gia tri cua bien se duoc luu lai sau moi lan goi ham su dung
		$c++;
		echo $c;
	}
	echo '<br/>';
	myCount();
	echo '<br/>';
	myCount();
	echo '<br/>';
	myCount();






