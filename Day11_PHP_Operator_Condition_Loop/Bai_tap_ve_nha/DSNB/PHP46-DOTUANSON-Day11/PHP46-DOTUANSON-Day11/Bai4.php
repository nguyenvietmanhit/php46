<?php

function disPlay($n)
{
for ($i=1;$i<=$n;$i++)
{   echo "$i";
    if($i==$n) break;
    echo "-";
}}
$n=50;
disPlay($n);