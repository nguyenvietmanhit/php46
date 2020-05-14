<?php
$a=12;
function chuVi($a)
{
    return $a+$a;
}
function dienTich($a)
{
    return $a*$a;
}
$chuVi=chuVi($a);
$dienTich=dienTich($a);
echo "<b>";
echo "<br/>Canh hinh vuong: $a m";
echo "<br/>Chu vi hinh vuong: $chuVi m";
echo "<br/>Dien tich hinh vuong: $dienTich m2";
echo "<b/>";