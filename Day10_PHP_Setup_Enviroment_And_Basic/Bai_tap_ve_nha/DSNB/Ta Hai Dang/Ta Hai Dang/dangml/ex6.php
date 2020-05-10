<?php
    $name = "Tạ Hải Đăng";
    $age = 22;
    $home = "Vĩnh Phúc";
?>
<style type="text/css">
    div{
        background: #cccccc;
        width: 500px;
        margin: auto;
    }
    ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    li{
        padding-bottom: 10px;
        padding-left: 25px;
    }
    input{
        width: 450px;
    }
    textarea{
        width: 450px;
        height: 100px;
    }
    input[type=submit]{
        background: green;
    }
</style>
<div>
    <ul>
        <li>Basic Form</li>
        <li>Họ tên:</li>
        <li><input type="text" name="name" value="<?= $name; ?>"></li>
        <li>Tuổi:</li>
        <li><input type="text" name="age" value="<?= $age ?>"></li>
        <li>Quê quán</li>
        <li><textarea name="home"><?= $home; ?></textarea></li>
        <li>Ảnh đại diện</li>
        <li><input type="file" name="" id=""></li>
        <li><input type="submit"></li>
    </ul>
</div>