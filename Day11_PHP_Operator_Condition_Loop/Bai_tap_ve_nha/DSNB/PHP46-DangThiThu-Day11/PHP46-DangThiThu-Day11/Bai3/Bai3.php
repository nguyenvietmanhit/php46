<?php
$number1 = 8;
const PI = 3.14;
function DienTich($number1){
    $dt = $number1 * $number1*PI;
    return $dt;
}

function ChuVi($number1){
    $cv = 2*$number1*PI;
    return $cv;
}

echo "Đường kính hình tròn = $number1 m";
echo "<br>";
echo "Chu vi hình tròn = " .ChuVi(8). " m";
echo "<br>";
echo "Diện tích hình tròn = " .DienTich(8). " m<sup>2</sup>";