<?php
$number1 = 4;
$number2 = 5;
function DienTich($number1, $number2){
    $dt = $number1*$number2;
    return $dt;
}

function ChuVi($number1, $number2){
    $cv = ($number1+$number2)*2;
    return $cv;
}

$cv = ChuVi(4, 5);
$dt = DienTich(4, 5);
echo "Chiều dài hình chữ nhật =  $number1 m<br>";
echo "Chiều rộng hình chữ nhật =  $number2 m<br>";
echo "Chu vi hình chữ nhật =  $cv m<br>";
echo "Diện tích hình chữ nhật = $dt m<sup>2</sup><br>";







?>