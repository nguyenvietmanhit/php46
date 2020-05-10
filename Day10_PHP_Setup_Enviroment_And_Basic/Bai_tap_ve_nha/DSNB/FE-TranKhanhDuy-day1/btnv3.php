<!DOCTYPE hmtl>
<html>
<head>
    <title>Demo PHP</title>
    <meta charset="utf-8">
</head>
<body>
<h1> PHP đầu tiên</h1>

<?php
$name  = 'Trần Khánh Duy';
$age = 24;
$dateOfBirth = '14/07/1997';
$sex = 'Nam';
$adress = 'Thanh Trì Hà Nội';
?>
<table>
    <tr>
        <th>Họ và tên</th>
        <th>Tuổi</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
    </tr>
    <tr>
        <th><?php echo $name ?></th>
        <th><?php echo $age ?></th>
        <th><?php echo $dateOfBirth ?></th>
        <th><?php echo $sex ?></th>
        <th><?php echo $adress ?></th>
    </tr>
</table>
</body>
</html>