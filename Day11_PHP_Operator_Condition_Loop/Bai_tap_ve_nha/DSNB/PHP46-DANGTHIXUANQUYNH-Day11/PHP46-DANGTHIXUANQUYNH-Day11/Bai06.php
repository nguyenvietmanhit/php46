<?php
function Sum($n){
    $S=0;
    for($i=1;$i<=$n;$i++){
        $S +=$i;
    }
    echo $S;
}
Sum(500);