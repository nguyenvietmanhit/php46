<?php
const pi=3.14;
$a=6;
function chuVi($a)
{
    return 2*pi*($a/2);
}
function dienTich($a)
{
    return pi*($a/2)*($a/2);
}
$chuVi=chuVi($a);
$dienTich=dienTich($a);
echo "<br/>Đường kính hình tron: $a m";
echo "<br/>Chu vi hình tròn: $chuVi m";
echo "<br/>Diện tích hình tròn: $dienTich m2";