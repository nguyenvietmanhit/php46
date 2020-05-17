<?php

    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $arr = array_map('strlen', $array);  
    echo "Chuỗi lớn nhất độ dài =" . max($arr) ;
    echo "<br>";
    echo "Chuỗi nhỏ nhất là độ dài = " . min($arr);

?>
