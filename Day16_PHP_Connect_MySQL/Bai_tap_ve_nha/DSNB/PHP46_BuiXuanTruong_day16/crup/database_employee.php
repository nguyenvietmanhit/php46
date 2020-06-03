<?php
const DB_HOST="localhost";
const DB_USERNAME="root";
const DB_PASSWORD="";
const DB_NAME="btvn_day16";
const DB_PORT=3306;
$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);
if(!$connection){
    die("Connect thất bại!".mysqli_connect_errno());
}
//else{
//    echo "Connect thành công!";
//}
?>
