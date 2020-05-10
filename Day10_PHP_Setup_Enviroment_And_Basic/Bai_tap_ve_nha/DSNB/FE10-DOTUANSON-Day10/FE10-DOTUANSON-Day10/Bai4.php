<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 4</title>
    <link rel="stylesheet" type="text/css">
</head>
<body>
<?php
    $hoTen="Họ tên";
    $tuoi="Tuổi";
    $ngaySinh="Ngày sinh";
    $gioiTinh="Gioi tính";
    $queQuan="Quê Quán";
?>
<form method="post" action="Bai4.php" name="bang">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $hoTen;?></th>
            <th><?php echo $tuoi;?></th>
            <th><?php echo $ngaySinh;?></th>
            <th><?php echo $gioiTinh;?></th>
            <th><?php echo $queQuan;?></th>
        </tr>
        <tr>
            <td>Nguyễn Văn Mạnh</td>
            <td>29</td>
            <td>05/01/1990</td>
            <td>Nam</td>
            <td>Sơn Đồng-Hoài Đức-Hà Nội</td>
        </tr>
    </table>

</form>
</body>
</html>