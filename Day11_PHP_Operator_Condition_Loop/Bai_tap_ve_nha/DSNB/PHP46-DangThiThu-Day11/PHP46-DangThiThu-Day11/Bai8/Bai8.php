<?php
function Bai8(){
    $number = 5;
    for ($i=1; $i<=$number; $i++){
        for ($j=1; $j <= $i; $j++){
            echo "*";

        }
        echo "<br>";
    }
    for ($i = $j; $i >=1; $i--){
        for ($j=1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
}
Bai8();