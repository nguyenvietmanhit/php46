<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];
echo "phần tử đầu tiên của mảng:" .reset($numbers);
echo"<br/>";
echo "phần tử cuối cùng của mảng:" .end($numbers);
echo"<br>";
echo "Số lớn nhất của mảng:".max($numbers);
echo"<br>";
echo "Số nhỏ nhất của mảng:".min($numbers);
echo "<br>";
echo "Tổng các giá trị trong mảng = " .array_sum($numbers);
echo "<br>";
echo "Sắp xếp theo chiều tăng giá trị";
sort($numbers);
var_dump($numbers);
echo"<br>";
echo "Sắp xếp theo chiều giảm giá trị";
rsort($numbers);
var_dump($numbers);
echo"<br>";
echo "Sắp xếp theo chiều tăng của key";
ksort($numbers);
var_dump($numbers);
echo"<br>";
echo "Sắp xếp theo chiều giảm của key";
krsort($numbers);
var_dump($numbers);
?>