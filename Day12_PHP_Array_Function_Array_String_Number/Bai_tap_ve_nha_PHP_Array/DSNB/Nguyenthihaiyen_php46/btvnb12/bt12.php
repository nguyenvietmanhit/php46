<?php 
$numbers = [
  'key1' => 12,   
  'key2' => 30,   
  'key3' => 4,   
  'key4' => -123,   
  'key5' => 1234,   
  'key6' => -12565,   
];
echo "Phần tử đầu tiên của mảng: " . reset($numbers);
echo "<br />";
echo "Phần tử cuối cùng của mảng: " . end($numbers);
echo "<br />";
        $gia_tri_lon_nhat = max($numbers);   
		$gia_tri_nho_nhat = min($numbers);   
		echo "Giá trị lớn nhất: ".$gia_tri_lon_nhat."<br>";  
		echo "Giá trị nhỏ nhất: ".$gia_tri_nho_nhat."<br>";
echo"---------------------------------<br / />";
sort($numbers, SORT_NUMERIC);
echo"sắp xếp theo thứ tự tăng dần <br />";
foreach ($numbers as $key => $val) {
    echo "numbers[" . $key . "] = " . $val . "<br />";
}
rsort($numbers, SORT_NUMERIC);
echo"sắp xếp theo thứ tự giảm dần <br />";
foreach ($numbers as $key => $val) {

    echo "numbers[" . $key . "] = " . $val . "<br />";
}


 ?>