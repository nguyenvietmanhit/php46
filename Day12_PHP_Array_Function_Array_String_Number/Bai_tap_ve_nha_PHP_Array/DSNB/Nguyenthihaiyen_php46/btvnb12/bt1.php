<?php 
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
$sum = 0;
$multiple = 1;
$chia=1;
$hieu=0;

foreach($arrs AS $value) {
    $sum += $value;
    $multiple *= $value;
    $chia/=$value;
    $hieu-=$value;
}
echo "Tổng = $sum, Tích = $multiple, Hieu=$hieu,Thương=$chia";
 ?>