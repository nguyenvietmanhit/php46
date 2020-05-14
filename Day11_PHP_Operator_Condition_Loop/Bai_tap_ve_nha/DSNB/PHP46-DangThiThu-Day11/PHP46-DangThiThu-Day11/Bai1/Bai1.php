<?php
$number1 = 8;
$number2 = 9;
function DienTich($number1, $number2){
    $dt = $number1 * $number2;
    return $dt;
}

function ChuVi($number1, $number2){
    $cv = ($number1 + $number2)*2;
    return $cv;
}

echo "Chiều dài hình chữ nhật = $number1 m";
echo "<br>";
echo "Chiều rộng hình chữ nhật = $number2 m";
echo "<br>";
echo "Chu vi hình chữ nhật = " .ChuVi(8, 9). " m";
echo "<br>";
echo "Diện tích hình chữ nhật = " .DienTich(8, 9). " m<sup>2</sup>";
