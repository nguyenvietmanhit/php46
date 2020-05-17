<?php
function arraytolower($array, $include_leys=false) {

    if($include_leys) {
        foreach($array as $key => $value) {
            if(is_array($value))
                $array2[strtolower($key)] = arraytolower($value, $include_leys);
            else
                $array2[strtolower($key)] = strtolower($value);
        }
        $array = $array2;
    }
    else {
        foreach($array as $key => $value) {
            if(is_array($value))
                $array[$key] = arraytolower($value, $include_leys);
            else
                $array[$key] = strtolower($value);
        }
    }

    return $array;
}
$a=['a','b','ABC'];
$a1=arraytolower($a);
echo "<bre>";
print_r($a1);
echo "</bre>";
$b=['1','B','C','E'];
$b1=arraytolower($b);
echo "<bre>";
print_r($b1);
echo "</bre>";