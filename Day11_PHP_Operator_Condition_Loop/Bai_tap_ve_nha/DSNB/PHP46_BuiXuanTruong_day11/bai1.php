<?php
function chuvihcn($a,$b){
    return($a+$b)*2;
}
function dientichhcn($a,$b){
    return$a*$b;
}
$a=10;
$b=5;
$chuvi=chuvihcn($a,$b);
$dientich=dientichhcn($a,$b);
echo "Chiều dài hình chữ nhật = $a m";
echo"<br/>";
echo "Chiều rộng hình chữ nhật= $b m";
echo"<br/>";
echo "Chu vi hình chữ nhật = $chuvi m";
echo"<br/>";
echo "Diện tích hình chữ nhật= $dientich m";
?>