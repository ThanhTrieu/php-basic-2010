<?php
// lam viec voi string trong php
// cac gia tri duoc nam trong '' hoac ""
// localhost:port/project/folder/file.php
$monhoc = 'php';
$test = 'dang hoc php co ban';
$test2 = "dang hoc oop php";
// toan tu noi chuoi (ghep chuoi) : '.'
$test3 = $test . $test2;
// echo $test3;
// su dung bien ben trong chuoi - bat buoc su dung ""
$test4 = "hoc $monhoc sap xong roi";
$test5 = "hoc {$monhoc} sap xong roi";
$test6 = 'hoc $monhoc sap xong roi';
//echo $test6;
$test7 = 'hoc framework \'laravel\' ';
$test8 = 'hoc framework "laravel" ';
//echo $test8;

/***** CAC HAM XU LY VE CHUOI *********/
//1 : chuyen chuoi ve mang
$fruits = 'cam,tao,mit,le,oi';
$arrFruits = explode(',', $fruits);
//print_r($arrFruits);
//2: chuyern mang ve chuoi
$newFruits = implode(',', $arrFruits);
//echo $newFruits;
//3 : dem ky tu nam trong chuoi
$str = 'hoc php';
//echo strlen($str);
$str2 = 'học php';
//echo strlen($str2);
//echo mb_strlen($str2);
//4: fem so tu trong 1 cau
$word = str_word_count($str);
// echo $word;
// echo str_repeat($str, 5);
// 5: thay the ky tu nam trong chuoi
$newStr = str_replace('php', 'js', $str);
//echo $newStr;
$password = '123456789';
$password2 = '123456789';
$encodePass = md5($password);
$encodePass2 = md5($password2);
echo $encodePass;
echo "<br/>";
//echo $encodePass2;
$text = '<h1><i> hoc php</i></h1>';
$script = "<script>alert('hi');</script>";
//$htmlEntities = htmlentities($script);
//echo htmlentities($text);
//echo html_entity_decode($htmlEntities);

// 6: xoa bo cac tag html trong chuoi
echo strip_tags($text, '<h1>');

// 7: cat chuoi
$text2 = 'hoc lap trinh huong doi tuong php';
$text3 = substr($text2, 2, 5);
//echo $text3;
$text4 = strstr($text2, 't');
echo $text4;

// 8: tim kiem ky tu nam trong chuoi
if(strpos($text2, 'php') !== false){
	// tim thay
} else {
	// ko tim thay
}
echo "<br/>";
$text5 = '     123 test string 123     ';
// khong truyen tham so: xoa khoang trang
echo rtrim($text5);











