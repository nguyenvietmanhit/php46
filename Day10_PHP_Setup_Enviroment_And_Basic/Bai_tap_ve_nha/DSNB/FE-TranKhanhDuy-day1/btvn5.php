<?php
function info($name,$age,$adress){
    echo "Name:$name";
    echo "Age:$age";
    echo "Adress:$adress";
}
info('duy',33,'hanoi');
echo "<br/>";

function perimeterOfRectangle($width,$height){
    $sum = ($width + $height)*2;
    echo $sum;
    return $sum;
}
perimeterOfRectangle(12,12);
echo"<br/>";
function rectangularArea ($width,$height){
    $add = $width*$height;
    echo $add;
    return $add;
}
rectangularArea(12,12);
?>

