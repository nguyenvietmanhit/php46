<?php

function Bai5($number){
    $sum = 0;
    for ($i = 1; $i<=$number; $i++){
        $sum += 1/$i;
    }
    return $sum;
}
echo "Tổng là:" .Bai5(10);