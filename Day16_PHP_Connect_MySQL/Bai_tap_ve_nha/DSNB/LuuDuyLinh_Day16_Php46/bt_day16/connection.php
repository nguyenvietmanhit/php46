<?php
const DB_HOST='localhost';//tên sever đang chứa mysql
const DB_USERNAME='root';// user name đăng nhập vào mysql
const DB_PASSWORD='';//password đăng nhập vào mysql
const DB_NAME='nhanvien';//tên database
const DB_PORT=3306;//cổng của xamp

$connection= mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);
if(!$connection){
    die('kết nối thất bại'.mysqli_connect_error());

}
//echo '<h2>Kết nối dữ liệu thành công</h2>';