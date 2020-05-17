<?php
for($i=100;$i<=200;$i++)
{
    echo $i."  ";
}
echo "<br>";

function disPlay($array){


        foreach ($array as $key=>$value)
        {
            if($value%5!=0||$value==0)
                unset($array[$key]);

        }
            return $array;
}
$array=[12,5,200,10,125,60,92,345,-123,100,-125,0];

echo "Nhung so chia het cho 5 la trong mang la: ";
echo "<pre>";
print_r(disPlay($array));
echo "</pre>";
