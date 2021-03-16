<?php 
//lay thong tin ben phia server
// su dung bien toan cuc kieu mang $_SERVER
//echo "<pre>";
//print_r($_SERVER);

/***** Xu ly Time php **********/
// set timezone
// date_default_timezone_set('Asia/Ho_Chi_Minh');

// 1 - lay ra ngay thang hien tai
$today = date('d-m-Y H:i:s');
$date = date('d');
$month = date('m');
$year = date('Y');
// 2 - so sanh ngay thang
$d1 = '2021-03-16';
$d2 = '2021-03-15';
$time1 = strtotime($d1);
$time2 = strtotime($d2);
//echo $time1 . ' *** ' . $time2;
$d3 = date('d-m-Y', $time1);
//echo $d3;
$time3 = time();
//echo $time3;

$t = mktime(0,0,0,3,(16+20),2021);
//echo $t;
$d4 = date('Y-m-d', $t);
// echo $d4;
// 
$d5 = date('Y-m-d', strtotime('+3months'));
echo $d5;







