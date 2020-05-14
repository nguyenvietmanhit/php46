<?php
function add($n){
    $a = "";
    for($x = 1;$x <= $n;$x++){
        for($y = 1;$y <= $x;$y++){
            echo $a."*";
        }
        echo $a."<br/>";
    }
    $b = "";
    for($z = 1;$z <= $n;$z++){
        for($s = $n;$s >= $z;$s--){
            echo $b."*";
        }
        echo $b."<br/>";
    }
}
add(5);
?>