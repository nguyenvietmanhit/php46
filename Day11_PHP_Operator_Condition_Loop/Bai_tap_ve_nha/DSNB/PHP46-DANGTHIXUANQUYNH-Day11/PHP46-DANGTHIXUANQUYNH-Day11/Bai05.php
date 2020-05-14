<?php
function myFunction($n=10){
    $S=0;
    for($i=1;$i<= $n;$i++){
        $S += 1/($i);
    }
    echo $S;

}
myFunction();