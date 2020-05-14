<?php
function S($a){
    return $a*$a;
}
function P($a){
    return $a*4;
}
function MathSquare($a=12){
    echo "Cạnh hình vuông =".$a."m <br>";
    echo "Chu vi hình vuông =".P($a)."m<br>";
    echo "Diện tích hình vuông =".S($a)."m<sup>2</sup>";
}
MathSquare();