<?php
$arrs = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
foreach ($arrs as $value) {
    if ($value % 5 == 0 && $value>100 && $value<=200 ) {
        echo "$value ";
    }
}
?>