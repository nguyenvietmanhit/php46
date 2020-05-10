<?php
/**
 * Created by PhpStorm.
 * User: admin1
 * Date: 5/9/2020
 * Time: 8:22 AM
 */
function rectangle($length,$width){
    echo"Chiều dài hình chữ nhật=$length m";
    echo "<br/>";
    echo"Chiều rộng hình chữ nhật=$width m";
    echo "<br/>";
    $p=($length+$width)*2;
    echo "Chu vi hình chữ nhật=$p m";
    echo "<br/>";
    $s=$length*$width;
    echo "Diện tích hình chữ nhật=$s m2";
}
rectangle(2,3);
?>