<?php
const DB_HOST='localhost';
const DB_USERNAME='root';
const DB_PASSWORD='';
const DB_NAME='qlnhanvien';
const DB_POST=3307;
$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_POST);
if (!$connection)
{
    die('KET NOI THAT BAI'.mysqli_connect_error());

}
echo "<h2>KET NOI THANH CONG</h2>";