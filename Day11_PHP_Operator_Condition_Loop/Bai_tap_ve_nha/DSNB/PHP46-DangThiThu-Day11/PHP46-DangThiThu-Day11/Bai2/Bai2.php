<?php
$number1 = 8;
function DienTich($number1){
    $dt = $number1 * $number1;
    return $dt;
}

function ChuVi($number1){
    $cv = $number1*4;
    return $cv;
}

echo "Cạnh hình vuông = $number1 m";
echo "<br>";
echo "Chu vi hình vuông = " .ChuVi(8). " m";
echo "<br>";
echo "Diện tích hình vuômg = " .DienTich(8). " m<sup>2</sup>";