<?php
    $name = "Tạ Hải Đăng";
    $age = 29;
    $birth = "05/01/1990";
    $gender = "Nam";
    $home = "Vĩnh Phúc"
?>
<table border="1" style="text-align:center;">
    <tr>
        <td>Họ tên</td>
        <td>Tuổi</td>
        <td>Ngày sinh</td>
        <td>Giới tính</td>
        <td>Quê quán</td>
    </tr>
    <tr>
        <td><?= $name; ?></td>
        <td><?= $age; ?></td>
        <td><?= $birth; ?></td>
        <td><?= $gender; ?></td>
        <td><?= $home; ?></td>
    </tr>
</table>