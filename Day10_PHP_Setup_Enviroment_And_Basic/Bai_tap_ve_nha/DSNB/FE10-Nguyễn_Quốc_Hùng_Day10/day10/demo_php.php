<?php
echo "PhP46";
//1 - Biến
$name = 'Hùng'; 
$age = 21;
$arr = [];
$adress;
//2 - Các kiểu dữ liệu của biến
$number = 12;
$string = 'hung';	
$is_int = is_int($number);
echo "<br >";
var_dump($is_int);
// 3 - boolean
	// $pdo = new PDO();
//Ép kiểu dữ liệu
	// $number1 = 123;
	// $number1 = (string) $number1;
//hằng
const PI = 3.14;
define('AGE',14);
echo PI;
echo AGE;
//1 số hằng cung cấp 
echo "<br >";
echo __DIR__;
echo "<br >";
echo __LINE__;
echo "<br >";
echo __FILE__;

//hàm
// include 'import.php';// chạy code cả khi dẫn sai
// require 'import.php';// ko chạy code khi dẫn sai
// include_once chỉ dùng 1 lần dù có gọi mấy lần chăng nữa
?>
