<?php
function Sum($n)
{   $sum=0;
    echo "S($n)=";
    for ($i=1;$i<=$n;$i++)
    {
        $sum=$sum+(1/$i);
        echo "1/$i";
        if($i==$n) break;
        echo  "+";
    }
    echo "=$sum";}


    $n=10;
    Sum($n);



