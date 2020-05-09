<?php
echo 'PHP46';

//1 - Biến

$name = 'MẠnh'; //string
$age = 14; //int
$arr = [];
$adress;

$a = 5;
$x = 4;

$___name = 'Manh';
//$^&age = 5;
$name = 'Mạnh';
$NAME = 'Manh1';

//2  -CÁc kiểu dữ liệu của biến
//Integer - số nguyên
$number1 = 12;
$number2 = -12;
//hàm is_int kiểm tra biến có phải kiểu dữ liệu số
// nguyên hay ko
$is_int = is_int($number1);
//hàm var_dump dùng để xem thông tin biến
var_dump($is_int);

//String
$string1 = 'String 1';
$string2 = "String 2";
$string3 = "Hello 'Mạnh'";
echo "<br />";
echo $string3;// Hello 'Mạnh'
//
$is_string = is_string($string1);
var_dump($is_string); //true

//Boolean
$boolean1 = TRUE;
$boolean2 = FALSE;
$boolean3 = True;
$is_bool = is_bool($boolean1); //true

//Float/Double
$number1 = 1.23;
$number2 = -123.4;
$is_float = is_float($number1);

//NULL
$name = NULL; //Null, NuLL ...
$is_null = is_null($name); //true

//Array
$arr1 = []; //mảng rỗng ko có phần tử
//$number1 = 1;
//$number2 = 3;
//$number3 = 4;
$arr2 = [1, 3, 4]; //mảng có 3 phần tử
$arr3 = array(1, 3, 4); //dùng với phiên bản PHP cũ
$arr4 = [1, 2, [], TRUE, 'string'];
$is_arr = is_array($arr2); //true

//Object
//sẽ học ở phần lập trình hướng đối tượng
//$pdo = new PDO('');
//$is_obj = is_object($pdo); //true

//2 - ÉP KIỂU DỮ LIỆU
$number1 = 123;
$is_int = is_int($number1);
var_dump($is_int); //true

$number1 = (string) $number1;
$is_string = is_string($number1);
var_dump($is_string); //true

//3 - Hằng
const PI = 3.14;
define('AGE', 14);
echo "<br />";
echo PI; //3.14
echo "<br />";
echo AGE; //14
const PI = 5;

//Một số hằng cung cấp sẵn bởi PHP
echo "<br />";
echo __DIR__; //hằng này sẽ hay dùng hơn cả, để sử dụng
//khi upload file
echo "<br />";
echo __LINE__; //91
echo "<br />";
echo __FILE__;

//4 - Hàm
$number1 = 2;
//is_int()
$number2 = 3;
$number3 = 4;
//Có 2 loại:
//Hàm có sẵn: echo, is_int, is_string, var_dump ...
//Hàm tự định nghĩa
$is_int_var = true;
function displayName() {
    //code logic
    echo "Hello Mạnh";
}

displayName(); //Hello Mạnh
//Hàm có tham số
function displayAge($age) {
//    echo "Bạn $age tuổi";
//    echo "Bạn " . $age . " tuổi";
    echo "Bạn $age tuổi"; //bắt buộc phải sử dụng
//    dấu nháy kép, ko thể dụng nháy kép trong
// trường hợp này
}

displayAge(15); //Bạn 15 tuổi
displayAge(22); //Bạn 22 tuổi

//hàm có tham số được khởi tạo giá trị mặc định
function setName($name = 'Manh') {
    echo "Name: $name";
}

setName(); //Name: Manh
setName('ABC'); //Name: ABC

//hàm có nhiều tham số
function displayInfo($name, $age, $address) {
    echo "Name: $name";
    echo "Age: $age";
    echo "Adress: $address";
}

displayInfo('Mạnh', 30, 'Hoài Đức/HN');
displayInfo('Mạnh12', 33, 'Hoài111 Đức/HN');

//hàm có giá trị trả về
function sum($number1, $number2) {
    $sum = $number1 + $number2;
//    echo $sum;

    return $sum;

    echo "Lệnh này sẽ không được chạy";
}

//sum(1, 2); //3
$sum = sum(3, 4);
echo "Sum = $sum"; //3

//Kiểu tham trị và tham chiếu
$var = 5;
echo "Giá trị của biến var trước khi gọi hàm: $var"; //5
echo "<br />";

function change($variable) {
    $variable = 9;
    echo "Giá trị của biến variable bên trong hàm = $variable"; //9
    echo "<br />";
//    return $variable;
}

change($var);
echo "<br />";
echo "Giá trị của biến var sau khi gọi hàm = $var"; //
//code bên trên chính là kiểu truyền tham trị
//nghĩa là giá trị của biến sẽ không bị thay đổi khi gọi hàm

$var2 = 5;
echo "Biến var2 trước khi gọi hàm = $var2"; //5
function changeVar2(&$variable) {
    $variable = 9;
    echo "Biến variable bên trong hàm đang có giá trị = $variable";
}
changeVar2($var2);
echo "Biến var2 sau khi gọi hàm có giá trị = $var2";

//Tìm hiểu 1 số hàm liên quan đến nhúng file
//có 2 loại hàm là require và include
//include 'import.php';
//require 'import.php';
//echo "<h1>Đây là nội dung trong file import.php</h1>";
//khi nhúng file thì nên dùng hàm require để
//đảm bảo khi file không tồn tại thì sẽ ko chạy code bên
//dưới nữa
//require 'dsajhdkoasdas.dsadsa';

//require_once 'import.phpdsa';
//require_once 'import.phpdsa';
//require_once 'import.phpdá';
//require_once 'import.phpdá';
//chốt lại luôn, nên dùng hàm require_once khi nhúng file

echo "<h2>nội dung bên dưới require/include</h2>";