<?php
function hinhtron($b){
    $chuvi = $b*2*3.14;
    $dientich = $b*$b*3.14;
    $sum = "Đường kính hình tròn = $b m<br/>Chu vi hình tròn = $chuvi m<br/>Diện tích hình tròn = $dientich m";
    return $sum;
}
$display = hinhtron(6);
echo $display;
?>
