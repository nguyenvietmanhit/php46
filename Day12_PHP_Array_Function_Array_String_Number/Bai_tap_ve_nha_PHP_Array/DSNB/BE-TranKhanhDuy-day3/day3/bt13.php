<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$average = array_sum($numbers)/count($numbers);
echo $average;
echo "<br>";
$numberLargeAverage = "Các số lớn hơn giá trị trung bình là : ";
$numberSmallAverage  = "Các số nhỏ hơn hoặc bằng giá trị trung bình là : ";
foreach ($numbers AS $value){
    if($value > $average){
        $numberLargeAverage .= "$value"." ";
    }else{
        $numberSmallAverage .= "$value"." ";
    }
}
echo $numberLargeAverage;
echo "<br>";
echo $numberSmallAverage;
?>