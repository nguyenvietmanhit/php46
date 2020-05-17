<?php
    $arrs = [100, 105, 110, 115, 120];
    foreach ($arrs as $value) {
        if ($value % 5 == 0 && $value>100 && $value<200 ) {
            echo "$value ";
        }
    }
?>