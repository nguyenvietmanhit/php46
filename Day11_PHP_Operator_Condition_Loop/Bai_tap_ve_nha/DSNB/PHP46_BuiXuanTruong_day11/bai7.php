<?php
/**
 * Created by PhpStorm.
 * User: admin1
 * Date: 5/11/2020
 * Time: 11:06 PM
 */
function display($n){
    $start='';
    for($i=1; $i<=$n; $i++){
        $start=$start.'*';
        echo "$start<br/>";
    }
}
$n=5;
display($n);
?>