<?php
function hinhchunhat($width,$height){
    $chuvi = ($width+$height)*2;
    $dientich = $width*$height;
    $add = "Chiều rộng hình chữ nhật = $width m<br/>Chiều dài hình chữ nhật = $height m<br/>Chu vi hình chữ nhật = $chuvi m<br/>
Diện tích hình chữ nhật = $dientich m";
    return $add;
}
$display = hinhchunhat(10,12);
echo $display;
?>
<?php
//
//function getInfo($name, $age, $gender) {
//    $string =
//"Name: $name, Tuổi: $age, Giới tính: $gender";
//
//    return $string;
//}
//$display =
//    getInfo('mạnh', 12, 'nam');
//
//echo getInfo('Manh', 12, 'Nam');
//
//?>
