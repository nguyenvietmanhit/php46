<?php
function Sum($n)
{   $sum=0;
    for($i=1;$i<=$n;$i++)
    {
        $sum=$sum+$i;
    }
    return $sum;
}
$n=500;
$sumall=Sum($n);
echo "Tổng các số từ 1 đến 500 = $sumall";