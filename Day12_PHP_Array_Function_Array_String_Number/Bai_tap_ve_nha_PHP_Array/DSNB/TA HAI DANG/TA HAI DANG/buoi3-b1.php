<?php 
    $arrs = [2,5,6,9,2,5,6,12,5];
    $s=$arrs[0];
    echo "Tong: $arrs[0]";
    foreach ($arrs as $key => $value) {
        if ($key>0) {
            echo " + $value ";
            $s=$s+$value;
        }
    }
    echo "= $s <br>";
    $s=$arrs[0];
    echo "Hieu: $arrs[0]";
    foreach ($arrs as $key => $value) {
        if ($key>0) {
            echo " - $value ";
            $s=$s-$value;
        }
    }
    echo "= $s<br>";
    $s=$arrs[0];
    echo "Tich: $arrs[0]";
    foreach ($arrs as $key => $value) {
        if ($key>0) {
            echo " x $value ";
            $s=$s*$value;
        }
    }
    echo "= $s<br>";
    $s=$arrs[0];
    echo "Thuong: $arrs[0]";
    foreach ($arrs as $key => $value) {
        if ($key>0) {
            echo " / $value ";
            $s=(float)$s/$value;
        }
    }
    echo "= $s<br>";
?>