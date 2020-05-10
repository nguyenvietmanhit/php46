<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/8/2020
 * Time: 9:19 AM
 */
function displayInfo($name,$age,$gender)
{
    echo "<br/>Họ và tên: $name";
    echo "<br/>Tuổi: $age";
    echo "<br/>Gioi tính: $gender";
}
displayInfo('Nguyễn Văn Mạnh',24,'nam');
displayInfo('Điêu thuyền',30,'nữ');