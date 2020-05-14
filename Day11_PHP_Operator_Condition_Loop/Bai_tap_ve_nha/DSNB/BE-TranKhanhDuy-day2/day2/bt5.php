<?php
function calculate($n){
    $sum = 1+1/$n+1;
    for($n = 1/$n;$n < 10;$n++){
        $sum += $n;
        echo $n;
    }

}
calculate(10);

?>