<?php
$arr=[2,5,6,9,2,5,6,12,5];
$arr1=[2,5,2];
$arr2=[22,5,-1];
$arr3=[1,5,-1];
function tong($a)
{   $sum=0;
    $String="";
    foreach ($a as $key=>$value)
    {   $String.="$value";
        $sum+=$value;
        if($key==(count($a)-1)) break;
        $String.="+";

    }
    return $String."=".$sum;
}
$tong=tong($arr);
echo "Mang 1 Tổng bằng: ".$tong;
$tong=tong($arr1);
echo "<br>Mang 2 Tổng bằng: ".$tong;
$tong=tong($arr2);
echo "<br>Mang 3 Tổng bằng: ".$tong;
$tong=tong($arr3);
echo "<br>Mang 4 Tổng bằng: ".$tong;
echo "<br><br><br>";
function tich($a)
{
    $tich=1;
    $string="";
    foreach ($a as $key=>$value)
    {
        $string.="$value";
        $tich*=$value;
        if($key==(count($a)-1)) break;
        $string.="*";
    }
    return $string."=".$tich;
}
$tich=tich($arr);
echo "<br>Mang 1  Tich bang: $tich";
$tich=tich($arr1);
echo "<br>Mang 2  Tich bang: $tich";
$tich=tich($arr2);
echo "<br>Mang 3  Tich bang: $tich";
$tich=tich($arr3);
echo "<br>Mang 4  Tich bang: $tich";
echo "<br><br><br>";
function hieu($a)
{
    $hieu=0;
    $string="";
    foreach ($a as $key=>$value)
    {
        $string.="$value";
        $hieu-=$value;
        if($key==(count($a)-1)) break;
        $string.="-";
    }
    return $string."=".$hieu;

}
$hieu=hieu($arr);
echo "<br>Mang 1  Hieu bang: $hieu";
$hieu=hieu($arr1);
echo "<br>Mang 2  Hieu bang: $hieu";
$hieu=hieu($arr2);
echo "<br>Mang 3  Hieu bang: $hieu";
$hieu=hieu($arr3);
echo "<br>Mang 4  Hieu bang: $hieu";
echo "<br><br><br>";
function thuong($a)
{
    $thuong=1;
    $string="";
    foreach ($a as $key=>$value)
    {
        $string.="$value";
        $thuong/=$value;
        if($key==(count($a)-1)) break;
        $string.="/";
    }
    return $string."=".$thuong;
}
$thuong=thuong($arr);
echo "<br>Mang 1  Tich bang: $thuong";
$thuong=thuong($arr1);
echo "<br>Mang 2  Tich bang: $thuong";
$thuong=thuong($arr2);
echo "<br>Mang 3  Tich bang: $thuong";
$thuong=thuong($arr3);
echo "<br>Mang 4  Tich bang: $thuong";