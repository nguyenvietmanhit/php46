<!-- bài 2 -->
<h3>Bài 2 :</h3>
<?php
    
    function B2()
    {
        $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
            echo "Màu $arrs[0] là màu yêu thích của Anh ";
            echo "<br>";
            echo "Màu $arrs[1] là màu yêu thích của Sơn ";
            echo "<br>";
            echo "Màu $arrs[2] là màu yêu thích của Thắng ";
            echo "<br>";
            echo "Còn màu yêu thích của tôi là màu $arrs[3] ";
    }
    B2();

?>

<!-- bài 3: -->
<br>
<hr>
<h3>Bài 3 :</h3>
<?php

    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
    <table border="1" cellspacing="0">
        <tr>
            <th>Tên Khóa Học</th>
        </tr>
        <?php foreach($arrs as $value): ?>
        <tr>
            <td> <?php echo $value;  ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<!-- bài 4: -->
<br>
<hr>
<h3>Bài 4 :</h3>
<?php

    $arrs = array(  "Italy" => "Rome", 
                    "Luxembourg" => "Luxembourg", 
                    "Belgium" => "Brussels", 
                    "Denmark" => "Copenhagen", 
                    "Finland" => "Helsinki", 
                    "France" => "Paris", 
                    "Slovakia" => "Bratislava", 
                    "Slovenia" => "Ljubljana", 
                    "Germany" => "Berlin",
                    "Greece" => "Athens", 
                    "Ireland" => "Dublin", 
                    "Netherlands" => "Amsterdam", 
                    "Portugal" => "Lisbon", 
                    "Spain" => "Madrid", 
                    "Sweden" => "Stockholm", 
                    "United Kingdom" => "London",
                    "Cyprus" => "Nicosia", 
                    "Lithuania" => "Vilnius", 
                    "Czech Republic" => "Prague", 
                    "Estonia" => "Tallin", 
                    "Hungary" => "Budapest", 
                    "Latvia" => "Riga", 
                    "Malta" => "Valetta", 
                    "Austria" => "Vienna", 
                    "Poland" => "Warsaw"
                );

?>
<?php  foreach ($arrs as $k=>$v) 

    echo "Thủ Đô $k là của $v"."<br>";

?>

<!-- Bài 5: -->
<br>
<hr>
<h3>Bài 5 :</h3>
<?php

    $arr1 =[
            'a' =>  [
                    'b' => 0,
                    'c' => 1
                    ],
            'b' =>  [
                        'e' => 2,
                        'o' =>  [
                                'b' => 3
                                ]
                    ]
        ];
        // Lấy giá trị = 3 mà có key là b từ mảng trên
        echo $arr1['b']['o']['b'];
        echo "<br>";
        //Lấy giá trị = 1 mà có key là c từ mảng trên
        echo $arr1['a']['c'];
        echo "<br>";
        //Lấy thông tin của phần tử có key là a
        echo "<pre>";
        print_r ($arr1['a']);
        echo "</pre>";

?>

<!-- Bài 6: -->
<br>
<hr>
<h3>Bài 6 :</h3>
<?php 

    $keys = array   (
                    "field1"=>"first",
                    "field2"=>"second",
                    "field3"=>"third"
                    );
    $values = array (
                    "field1value"=>"dinosaur",
                    "field2value"=>"pig",
                    "field3value"=>"platypus"
                    );
        $keysAndValues=array_combine($keys,$values);
        echo "<pre>";
        print_r($keysAndValues);
        echo "</pre>"; 
        
?>

<!-- Bài 7: -->
<br>
<hr>
<h3>Bài 7 :</h3>

<?php

?>

<!-- Bài 8: -->
<br>
<hr>
<h3>Bài 8 :</h3>
<?php

    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $arr = array_map('strlen', $array);  
    echo "Chuỗi lớn nhất độ dài =" . max($arr) ;
    echo "<br>";
    echo "Chuỗi nhỏ nhất là độ dài = " . min($arr);

?>


<!-- Bài 9,10: -->
<br>
<hr>
<h3>Bài 9,10 :</h3>
<?php

    function chuyenDoiChuHoa($input,$case)
    {
        
        $arr=array();
        foreach ($input as $k=>$v)
        {
            if (is_array($v)) 
            {
            $arr[$k] = chuyenDoiChuHoa($v,$case);
            continue;  
            }
           $arr[$k] = ($case == CASE_UPPER ? strtoupper($v) : strtolower($v));  
        }
        return $arr;
    }
    echo "Mảng bài 9 chuyển về chữ thường<br>";
    $arr1 = ['a','b','ABC'];   
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
    $arr11 = chuyenDoiChuHoa($arr1,CASE_LOWER);  
    echo "<pre>";
    print_r($arr11); 
    echo "</pre>";
    echo "Mảng bài 10 chuyển về chữ Hoa <br>";
    $arr12 = ['1','b', 'c', 'd'];   
    echo "<pre>";
    print_r($arr12);
    echo "</pre>";
    $arr13 = chuyenDoiChuHoa($arr12,CASE_UPPER);  
    echo "<pre>";
    print_r($arr13); 
    echo "</pre>";

?>

<!-- Bài 11: -->
<br>
<hr>
<h3>Bài 11 :</h3>
<?php

    $array = array(1, 2, 3, 4, 5);
    $array=array_merge(array_diff($array,array('3')));
    echo "<pre>";
    print_r($array);
    echo "</pre>";

?>

<!-- Bài 12: -->
<br>
<hr>
<h3>Bài 12 :</h3>
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

