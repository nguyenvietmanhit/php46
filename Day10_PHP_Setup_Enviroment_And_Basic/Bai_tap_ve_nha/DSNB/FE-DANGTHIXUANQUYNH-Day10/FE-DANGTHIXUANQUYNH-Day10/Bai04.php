<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 04</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php require_once "save.php"?>
<div class="container">
    <table class="table table-bordered text-center">
<!--        <tr>-->
<!--            <th>--><?php //echo $name?><!--</th>-->
<!--            <th>--><?php //echo $age?><!--</th>-->
<!--            <th>--><?php //echo $date?><!--</th>-->
<!--            <th>--><?php //echo $gender ?><!--</th>-->
<!--            <th>--><?php //echo $place ?><!--</th>-->
<!--        </tr>-->
        <tr>
            <th><?php echo $arrForm[0] ?></th>
            <th><?php echo $arrForm[1] ?></th>
            <th><?php echo $arrForm[2] ?></th>
            <th><?php echo $arrForm[3] ?></th>
            <th><?php echo $arrForm[4] ?></th>
        </tr>
        <tr>
            <td>Đăng Thị Xuân Quỳnh</td>
            <td>21</td>
            <td>05/06/1998</td>
            <td>Nữ</td>
            <td>Tân Lập-Đan phượng- Hà Nội</td>
        </tr>
    </table>
</div>
</body>
</html>