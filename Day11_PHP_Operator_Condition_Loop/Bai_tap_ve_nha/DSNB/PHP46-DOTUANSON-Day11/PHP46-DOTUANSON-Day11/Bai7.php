<?php
function disPlay($n)
{   $j='';
    for($i=1;$i<=$n;$i++)
    {
        for($k=1;$k<=$i;$k++)
        {
            $j="*";
            echo "$j";
        }
        echo "<br/>";

    }
}
$n=5;
disPlay($n);