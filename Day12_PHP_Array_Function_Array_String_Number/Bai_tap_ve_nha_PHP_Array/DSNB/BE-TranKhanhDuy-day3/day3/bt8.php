<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$newArray = array_map('strlen',$array);
echo "Chuỗi lớn nhất là ".max($newArray);
echo "<br/>";
echo "Chuỗi nhỏ nhất là ".min($newArray);
?>