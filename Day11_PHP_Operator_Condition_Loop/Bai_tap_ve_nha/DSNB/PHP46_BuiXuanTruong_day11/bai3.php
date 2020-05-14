<?php
const PI=3.14;
function chuvitron($a){
    return PI*$a;
}
function dientichtron($a){
    return PI*($a/2)*($a/2);
}
$a=6;
$ptron=chuvitron($a);
$stron=dientichtron($a);
echo "Đường kính hình tròn= $a m";
echo '<br/>';
echo "Chu vi hình tròn= $ptron m";
echo '<br/>';
echo "Diện tích hình tròn= $stron m2";
?>