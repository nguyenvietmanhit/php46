<?php
function hinhvuong($a){
    $chuvi = $a*4;
    $dientich = $a*$a;
    $sum = "Cạnh hình vuông = $a m<br/>Chu vi hình vuông = $chuvi m<br/>Diện tích hình vuông = $dientich m";
    return $sum;
};
    $display = hinhvuong(10);
echo $display;
?>