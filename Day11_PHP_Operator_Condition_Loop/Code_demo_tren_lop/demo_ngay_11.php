<?php
//1 - TOÁN TỬ
$number1 = 2;
$number2 = 3;
echo $number1 + $number2; //5
echo "<br />";
echo $number1 - $number2; //-1
echo "<br />";
echo $number1 * $number2; //6
echo "<br />";
echo $number1 / $number2; //-0.677777
echo "<br />";
echo $number1 % $number2; //2
echo "<br />";
echo $number1++; //3
echo $number2--; //2

$number = 5;
$sum = $number-- + --$number * ++$number;
//        5      +    3      *      4
//17 19

//2 - Toán tử so sánh
$number1 = 4;
$number2 = '4'; //4
var_dump($number1 == $number2); //true
//var_dump($number1 === $number2); //false
var_dump($number1 != $number2); //true
var_dump($number1 > $number2); //false
var_dump($number1 >= $number2); //false
var_dump($number1 < $number2); //true
var_dump($number1 <= $number2); //true

//3 - Toán tử logic
$number1 = 5;
$number2 = 4;
var_dump
($number1 == $number2 && $number1 != 0);
//false
var_dump
($number1 == $number2 || $number1 !=0);
//true
var_dump(!($number1 != 0)); //false
//4 - Toán tử gán
$number = 5;
echo $number += 4;  //$number = $number + 4 = 9
echo $number -= 1; //8
echo $number *= 2; //16
echo $number /= 4; //4
echo $number %= 2; //0

//5 - Toán tử điều kiện là ký tự ? và :
$number = 5;
if ($number > 0) {
    echo 'Number > 0';
} else {
    echo 'Number <= 0';
}

echo $number > 0 ? 'Number > 0' : 'Number <= 0';

//Thực hành 1
$x = 5;
$sum = $x++ * ++$x + 2 * --$x % 2;
      // 5  *  7   + 0
//35

$x = 5;
$sum = $x * $x - --$x * 2 + $x++ - $x * ++$x;
   //   5 *  5 -  4   * 2 +  4   -  5 +  6
//-9


$x = 2;
$sum = 9;
$sum = $sum++ - 2 * $sum++ + ++$sum * 3;
//      9     -  2 *  10    +   12 * 3
echo $sum;
//23 22 25

//Thực hành 2
$number1 = 10;
$number2 = 7;
echo "<span style='color: red'>";
    echo "$number1 + $number2 = "
        . ($number1 + $number2);
    echo "<br />";
    echo "$number1 - $number2 = "
        . ($number1 - $number2);
    echo "<br />";
echo "</span>";

//Thực hành 3
$number = 8;
echo "<span style='color:red;'>";
    echo "Giá trị hiện tại là $number";
    echo "<br />";
    $number2 += 2;
    echo "Cộng thêm 2. 
    Giá trị hiện tại là $number";
    echo " <br />";
echo "</span>";

//CÂU LỆNH ĐIỀU KIỆN
//If else else if switch case
$number = 5;
//IF: dùng cho 1 trường hợp
if ($number > 0) {
    echo 'Number > 0';
}

//IF ELSE: dùng cho 2 trường hợp
$number = -2;
if ($number > 0) {
    echo 'Number > 0';
} else {
    echo 'Number < 0';
}
$is_check = $number > 0 ? TRUE : FALSE; //false
//IF ELSEIF ELSE: > 2 trường hợp
$number = 5;
if ($number > 10) {
    echo 'Number > 10';
} elseif ($number > 8) {
    echo "Number > 8 và <= 10";
} elseif ($number > 4) {
    echo "Number > 4 và <= 8";
} else {
    echo "Number <= 4 ";
}

//switch case: dùng >= 2 trường hợp
//chỉ dùng với so sánh bằng, và nhìn cấu trúc
//sẽ đẹp hơn if elseif
//$day = 4;
//if ($day == 2) {
//    echo "Thứ 2";
//} else if ($day == 3) {
//    echo "Thứ 3";
//} else if ($day == 4) {
//    echo "Thứ 4";
//} else {
//    echo "Không phải thứ 2, 3, 4";
//}

$day = 3;
switch ($day) {
    case 2:
        echo "Thứ 2";
        break;
    case 3:
        echo 'Thứ 3';
        break;
    case 4:
        echo 'Thứ 4';
        break;
    default:
        echo 'Không phải thứ 2, 3, 4';
}

//VÒNG LĂP
//FOR: vòng lặp xác định trước số lần lặp
for ($i = 1; $i < 10; $i++) {
    echo $i; //123456789
}


//while: vòng lặp ko xác định trc só lần lặp
$j = 1;
while($j < 10) {
    echo $j;
    $j++;
}
//123456789

//do..while: giống while, luôn thực hiện
//biểu thức trong while ít nhất 1 lần cho dù điều kiện
//trong while bị sai ngay từ đầu
$k = 1;
do {
    echo $k;
    $k++;
} while($k < 10);
//123456789

$l = 1;
do {
    echo $l;
} while($l < 0);
//1
//2 từ khóa can thiệp vào luồng mặc định vòng lặp
//break - continue
for ($i = 1; $i < 10; $i++) {
    echo $i; //123456
    if ($i > 5) {
        break;
    }
}
//12345
//123456
//123456789

for ($j = 1; $j < 10; $j++) {
    echo $j;
    if ($j >= 2) {
        continue;
    }
    //chả có code gì cả

}
//123456789
