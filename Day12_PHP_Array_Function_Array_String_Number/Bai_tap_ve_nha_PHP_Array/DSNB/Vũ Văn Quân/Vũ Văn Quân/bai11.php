<?php

    $array = array(1, 2, 3, 4, 5);
    $array=array_merge(array_diff($array,array('3')));
    echo "<pre>";
    print_r($array);
    echo "</pre>";

?>