<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/8/2020
 * Time: 9:19 AM
 */
$chieuD=4;
$chieuR=2;
function chuVi($chieuDai,$chieuRong)
{
    return ($chieuDai+$chieuRong)*2;
}
function dienTich($chieuDai,$chieuRong)
{
    return $chieuDai*$chieuRong;
}
echo "CHieu dai HCN: $chieuD m";
echo "<br/>Chieu rong HCN: $chieuR m";
$chuVi=chuVi($chieuD,$chieuR);
$dienTich=dienTich($chieuD,$chieuR);
echo "<br/>Chu vi HCN: $chuVi m";
echo "<br/>Dien tich HCN: $dienTich m2";