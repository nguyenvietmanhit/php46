<?php
    function add($n){
    $x = "";
    for($i = 1;$i <= $n;$i++){
        for($j = 1;$j <= $i;$j++){
            echo $x.''."*";
        }
        echo $x.'<br/>';
    }
}
add(5);

?>