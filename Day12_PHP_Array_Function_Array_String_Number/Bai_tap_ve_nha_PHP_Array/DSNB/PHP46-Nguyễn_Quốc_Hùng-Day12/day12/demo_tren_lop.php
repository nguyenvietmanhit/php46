<?php

//DEMO về mảng

//khai báo 4 nhân viên

$staff1 = 'Nv1';

$staff2 = 'Nv2';

$staff3 = 'Nv3';

$staff4 = 'Nv4';



$arr = array();

$arr = ['nv1', 'nv2', 'nv3', 'nv4'];

$arr2 = [123, "String1", 1.23, TRUE, false, []];

//báo lỗi nếu cố tình echo 1 biến kiểu mảng

// hoặc 1 object

//echo $arr2;

//var_dump($arr2);

//cách debug để hiển thị thông tin dữ liệu có

//cấu trúc như mảng hoặc object

echo "<pre>";

print_r($arr2);

echo "</pre>";



//Key của mảng

echo $arr2[0];//123

echo $arr2[1];//string1

$arr2 = [123, "String1", 1.23, TRUE, false, []];

//dùng vòng lặp for để hiển thị ra giá trị của các phần tửu

//trong mảng arr2;

//hàm count($arr2) trả về 6 phần tử

for ($key = 0; $key < count($arr2); $key++) {

    var_dump($arr2[$key]);

}



//Vòng lặp foreach

//chỉ dùng để lặp mảng, vãn có thể sử dụng

// break/continue

//để can thiệp vào vòng lặp foreach

$arr = ['string1', 123, 'string2'];

//cú pháp đầy đủ của vòng lặp foreach

//khi thao tác với mảng, luôn dùng vòng lặp foreach

foreach ($arr AS $key => $value) {

    echo "Key: $key, Value tương ứng: $value";

    echo "<br />";

}

$arr3 = [TRUE, NULL];

foreach($arr3 AS $k => $item) {

    echo "Key: $k, value: $item";

    echo "<br />";

}



//cú pháp khuyết key

$arr = [1, 2, 3];

foreach($arr AS $value) {

    var_dump($value);

}

//có 2 cách lấy giá trị tương ứng của mảng

//lấy giá trị theo key

echo $arr[0]; //1

echo $arr[1]; //2

echo $arr[2]; //3

//dùng foreach để lấy



//Phân loại mảng trong PHP

//có 3 loại mảng

//1 - Mảng tuần tự, mảng có key là số nguyên

//với mảng tuần tự mà ko khai báo tường mình key,

//thì key của phần tử đầu tiên sẽ nhận giá trị = 0

$arr1 = [1, 2, 'string', '0'];

echo "<pre>";

print_r($arr1);

echo "</pre>";

//lấy giá trị phần tử theo key hoặc dùng foreach

// 2 - Mảng kết hợp

//key sẽ ở dạng kết hợp cả dạng số và chuỗi

$arr = [

    'name' => 'Mạnh',

    'age' => 30,

    'address' => 'HÀ NỘI',

    5 => 'test'

];

//để lấy ra giá trị của phần tử cũng có 2 cách quen thuộc

//lấy theo key của mảng

echo $arr['age']; //30

echo $arr['address']; //HÀ NỘI

echo $arr[5]; //test

//dùng foreach

foreach ($arr AS $key => $value) {

    echo "Key: $key, Value: $value";

    echo "<br />";

}

echo "<pre>";

print_r($arr);

echo "</pre>";



//3 - Mảng đa chiều

$arr = [

    'name' => 'Manh',

    'age' => 30,

    'class' => [

        'count' => 40,

        'status' => 'active'

    ]

]; //mảng 2 chiều

//lấy ra giá trị của mảng thì vẫn lấy theo 2 cách

//lấy theo key

echo $arr['class']['status']; //active

echo $arr['class']['count']; //40

echo $arr['age']; //30

//dùng foreach

$arr = [

    'name' => 'Manh',

    'age' => 30,

    'class' => [

        'count' => 40,

        'status' => 'active'

    ]

];

//$key = name, age, class

//$value = Manh, 30, ['count' => 40, 'status' => 'active']

foreach ($arr AS $key => $value) {

    echo "Key: $key, ";

    echo "Value:";

    echo "<pre>";

    print_r($value);

    echo "</pre>";

}



//ví dụ mảng 3 chiều

$arr = [

  'name' => 'Manh',

  'class' => [

      'name' => 'PHP46',

      'teacher' => [

          'name' => 'Teacher',

          'age' => 30

      ]

  ]

];



echo "<pre>";

print_r($_SERVER);

echo "</pre>";



//Thực hành 1

$arrs = [12, 50, 60, 90, 12, 25, 60];

//tính tổng và tích của các phần tử trong mảng

//dùng foreach để lặp mảng

$sum = 0;

$multiple = 1;

foreach($arrs AS $value) {

    $sum += $value;

    $multiple *= $value;

}

echo "Tổng = $sum, Tích = $multiple";

?>

<!--CÚ PHÁP THẺ VIẾT TẮT IF ELSEIF ELSE CỦA PHP

KHI VIẾT LÔNG VỚI HTML

-->

<?php

$number = 5;

?>

<?php if ($number > 0): ?>

    <table border="1" cellpadding="6">

        <tr>

            <td>Cột A</td>

            <td>Giá trị A</td>

        </tr>

    </table>

<?php else: ?>

    <table border="1" cellpadding="6">

        <tr>

            <td>Cột B</td>

            <td>Giá trị B</td>

        </tr>

    </table>

<?php endif; ?>



<?php

$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

//khi có thao tác với HTML mà cần sử dụng cấu trúc

//điều khiển như if else ..., vòng lặp như foreach

//thì cần dùng cú pháp viết tắt của nó, để tránh việc

//trộn lẫn HTML và PHP sẽ rất phức tạp

?>

<table border="1" cellspacing="0">

    <tr>

        <th>Tên khóa học</th>

    </tr>

    <?php foreach($arrs AS $value): ?>

        <tr>

            <td><?php echo $value; ?></td>

        </tr>

    <?php endforeach; ?>

</table>



<!--3 - THực hành 1 số hàm có sẵn thông dụng của php về-->

<!--xử lý mảng-->

<?php

$arr = [1, 3, 4];

//hàm tính tổng

$sum = array_sum($arr);

echo $sum; //8

//kiểm tra xem key có tồn tại trong mảng hay ko

$arr = [

    'name' => 'Manh',

    'aeg' => 123

];

$is_exists = array_key_exists('123', $arr);

var_dump($is_exists); //false

//tìm kiếm vị trí xuất hiện của 1 phần tử trong mảng,

//trả về key của phần tử tìm thấy nếu có, ng lại ko có

//trả về FALSE

$arr = ['a', 'b', 'c'];

$position = array_search('cđe', $arr);

echo $position;//false

//loại bỏ giá trị trùng lặp trong mảng

$arr = [1, 2, 3, 3, 3, 5];

$arr = array_unique($arr);

print_r($arr); //[1, 2, 3, 5]

//thêm phần tử vào cuối mảng

$arr = [1, 2];

//thêm phần tử có giá trị = 123 vào cuối mảng

//$arr[] = 123;

//print_r($arr); //[1, 2, 123]

array_push($arr, 123);

print_r($arr); //[1, 2, 123]

//lấy tổng số phần tử đang có của mảng

$count = count($arr); //3

//kiểm tra xem có phải là mảng hay ko

$is_arr = is_array($arr);

//xóa phần tử mảng

$arr = [

    'name' => 'Manh',

    'age' => 28

];

unset($arr['name']);

print_r($arr); //['age' => 28]



//Demo 1 số hàm thao tác với string

//lấy độ dài chuỗi strlen

$string = 'abc';

echo strlen($string); //3

//chuyển chuỗi về chữ thường strtolower

$string = 'Nguyen Viet Manh';

echo strtolower($string); //nguyen viet manh

//chuyển chữ sang chữ hoa: strtoupper

$string = 'abc';

echo strtoupper($string); //ABC

//chuyển ký tự đầu tiên của chuỗi thành chữ hoa: ucfirst

$string = 'abc';

echo ucfirst($string); //Abc

//cắt khoảng trắng đầu và cuối chuỗi : trim

$string = '     abc      ';

echo trim($string); //abc

//hàm lấy chuỗi con từ chuỗi ban đầu :substr

$string = 'Hello World';

echo substr($string, 1); //ello World

echo substr($string, 1, 4); //elllo

echo substr($string, 4, -5); //o



//THAO TÁC VỚI NUMBER

$number = 5;

is_int(5); //true

is_float(6); //false

//làm tròn số lên

$number = 1.37;

echo ceil($number); //2 - làm tròn lên số nguyên gần nhất

echo floor($number); //1 - làm tròn xuống

//format định dạng tiền

$price = 123000000;

echo number_format($price); //123,000,000



//THAO TÁC VỚI TIME

echo time(); //trả về số giây (unix timestamp) từ thời điểm hiện tại

//so với thời điểm 1-1-1970

//14-05-2020 21:09:20

//chưa set timezone

date_default_timezone_set('Asia/Ho_Chi_Minh');

echo date('d-m-Y H:i:s'); //lấy ra thời gian

//hiện tại theo định dạng như trên



?>