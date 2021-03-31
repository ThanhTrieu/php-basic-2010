<?php
$test = "SADsds12DD";
// viet 1 bieu chinh quy kiem tra xem trong chuoi co chua con so hay ko?
//$expression = '/[0-9]/';
$expression = '/^[1-9]\d[0,5]$/';

if(preg_match_all($expression, $test, $macth)){
	print_r($macth);
} else {
	echo 'ko tim thay';
}