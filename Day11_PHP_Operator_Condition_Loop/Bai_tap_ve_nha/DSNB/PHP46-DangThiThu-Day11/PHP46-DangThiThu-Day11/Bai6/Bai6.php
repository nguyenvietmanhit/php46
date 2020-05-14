<?php
$number = 500;
function Bai6($number){
    $sum =0;
    for ($i = 1; $i<=$number; $i++){
        $sum += $i;
    }
    return $sum;
}
echo "Tổng các số từ 1 đến $number = " .Bai6(500);