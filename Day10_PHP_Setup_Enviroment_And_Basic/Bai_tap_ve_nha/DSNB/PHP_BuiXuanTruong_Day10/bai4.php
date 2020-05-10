
<!DOCTYPE>
<html>
<head>
    <title>Bài 4</title>
    <meta charset="utf8"/>
</head>
<body>
<h3>Thông tin căn bản về bạn</h3>
<table border="1" style="text-align: center" >
    <tr>
        <th>Họ Tên</th>
        <th>Tuổi</th>
        <th>Ngày Sinh</th>
        <th>Giới Tính</th>
        <th>Quê Quán</th>
    </tr>
    <tr>
        <td>Bùi Xuân Trường</td>
        <td>21</td>
        <td>01/09/1999</td>
        <td>Nam</td>
        <td>An Lão-Hải Phòng</td>
    </tr>
</table>
<?php
$name='Bùi Xuân Trường';
$age=21;
$birthday='01/09/1999';
$sex='Nam';
$address='An Lão-Hải Phòng';
echo 'Họ tên:'.$name;
echo '<br/>';
echo 'Tuổi:'.$age;
echo '<br/>';
echo 'Ngày sinh:'.$birthday;
echo '<br/>';
echo 'Giới tính:'.$sex;
echo '<br/>';
echo 'Quê quán:'.$address;
?>
</body>
</html>