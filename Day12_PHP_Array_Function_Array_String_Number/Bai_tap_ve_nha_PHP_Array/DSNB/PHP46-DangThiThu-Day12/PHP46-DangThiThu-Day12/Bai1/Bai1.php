<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
$sum = 0;
$mul = 1;
$sub = 4;
$div = 4;
foreach ($arrs as $value) {
    $sum += $value;
    $mul *= $value;
    $sub -= $value;
    $div /= $value;
}

echo "Tổng các phần tử = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = $sum";
echo "<br>";
echo "Tích các phần tử = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = $mul";
echo "<br>";
echo "Hiệu các phần tử = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = $sub";
echo "<br>";
echo "Thương các phần tử = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = $div";







