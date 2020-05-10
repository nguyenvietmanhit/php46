<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài4</title>
</head>
<body>
<?php
    $name = "Roronoa Zoro";
    $age = 21;
    $date = "11/11/1999";
    $sex = "Nam";
    $address = "Trong tim mềnh hớ hớ hớ ";
    echo "
<h2>Thông tin căn bản về bạn</h2>
<table border = 2 cellpadding='10' cellspacing='0'>
            <tr>
                <th>Họ tên</th>
                <th>Tuổi</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Quê quán</th>
            </tr>
            
            <tr>
                <td>$name</td>
                <td>$age</td>
                <td>$date</td>
                <td>$sex</td>
                <td>$address</td>
            </tr>

</table>
    ";
?>
</body>
</html>