<?php
$a=10;
$b=5;
function chuVi($a,$b){
    return ($a+$b)*2;
}
function dienTich($a,$b)
{
    return $a*$b;
}
$chuVi=chuVi($a,$b);
$dienTich=dienTich($a,$b);
echo "<b>";
echo "<br/>Chiều dài HCN: $a m";
echo "<br/>Chiều rộng HCN: $b m";
echo "<br/>Chu vi HCN: $chuVi m";
echo "<br/>Diện tich HCN: $dienTich m2";
echo "<b/>";