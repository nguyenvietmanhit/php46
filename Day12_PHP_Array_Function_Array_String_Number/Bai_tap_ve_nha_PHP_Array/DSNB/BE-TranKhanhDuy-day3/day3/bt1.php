<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
function add($arrs){

    $dis = "Tổng các phần tử = ";
    $sum = 0;
    foreach ($arrs AS $key => $value){
        $sum += $value;
        $dis .= "$value";
        if(next($arrs)==true) $dis .="+";
    }
    $dis .= " = ".$sum;
    return $dis;
}
$xyz = add($arrs);
echo $xyz;
echo "<br>";
function add1($arrs){
    $a = "Tích các phần tử = ";
    $sum1 = 1;
    foreach ($arrs AS $key => $value){
        $sum1 *= $value;
        $a .= "$value";
        if(next($arrs) == true) $a .= "*";
    }
    $a .= " = " .$sum1;
    return $a;
}
$disPlay = add1($arrs);
echo $disPlay;
?>
