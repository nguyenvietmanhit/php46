<?php
const  PI =3.14;
function C($a){
    return $a*PI;
}
function S($a){
    return ($a*$a*PI)/(4.0);
}
function MathCircle($a=6){

    echo "Đường kính hình tròn =$a"."m <br>";
    echo "Chu vi hình tròn = ".C($a)."m<br>";
    echo"Diện tích hình tròn =".S($a)."m<sup>2</sup>";
}
MathCircle();