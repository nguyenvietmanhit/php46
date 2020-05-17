<?php

    $numbers = [
        
        'key4' => -123,   
        'key5' => 1234,   
        'key6' => -12565,  
        'key1' => 12,   
        'key2' => 30,   
        'key3' => 4,    
        ];
    //Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng trên    
    $valueStart=reset($numbers);
    echo " Phần tử đầu tiên là : $valueStart";
    echo "<br>";  
    $valueEnd = end($numbers);
    echo " Phần tử cuối cùng là : $valueEnd";
    echo "<br>"; 
    //Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
    echo " số lớn nhất".min($numbers);
    echo "<br>"; 
    echo " số nhỏ nhất".max($numbers);
    echo "<br>"; 
    echo " tổng các giá trị từ mảng".array_sum($numbers);
    echo "<br>"; 
    //Sắp xếp mảng theo chiều tăng, giảm các giá trị
    echo "<br>";
    echo "Sắp xếp mảng theo chiều tăng Value <br>";
    $arr=sort($numbers);
    foreach ($numbers as $k=>$v)
    {
        echo  $v;
        echo "<br>";   
    }
    echo "<br>";
    echo "Sắp xếp mảng theo chiều giảm Value <br>";
    $arr=rsort($numbers);
    foreach ($numbers as $k=>$v)
    {
        echo  $v;
        echo "<br>";
    }
    
?>

