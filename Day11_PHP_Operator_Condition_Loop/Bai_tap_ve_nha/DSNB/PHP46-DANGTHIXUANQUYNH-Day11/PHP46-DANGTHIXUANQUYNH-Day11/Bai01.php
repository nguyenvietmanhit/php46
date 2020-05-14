<?php
function S($a,$b){
    return $a*$b;
}
function C($a,$b){
    return ($a+$b)*2;
}
function MathRectangle($a, $b){
    echo "Chiều dài hình chữ nhật = ".$a ."m <br>";
    echo "Chiều rộng hình chữ nhật = ".$b. "m <br>";
    echo "Chu vi hình chữ nhật =". C($a,$b) ."m <br>";
    echo "Diện tích hình chữ nhật =". S($a,$b) ."m<sup>2</sup>";
}
MathRectangle(10,5);
