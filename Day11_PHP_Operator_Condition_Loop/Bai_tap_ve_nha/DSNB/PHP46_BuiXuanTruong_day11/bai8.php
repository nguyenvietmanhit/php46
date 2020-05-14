<?php
function display($n){
    $start='';
    for($i=1; $i<=$n; $i++){
        $start=$start.'*';
        echo "$start<br/>";
    }
    for($i=1;$i<$n;$i++){
        $start=substr($start, 0, -1);
        echo "$start<br/>";
    }
}
$n=5;
display($n);