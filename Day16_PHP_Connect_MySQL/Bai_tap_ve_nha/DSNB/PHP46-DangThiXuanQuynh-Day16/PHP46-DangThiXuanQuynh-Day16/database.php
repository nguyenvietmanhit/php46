<?php
const DB_HOST ='localhost';
const DB_USERNAME='root';
const DB_PASSWORD='';
const DB_NAME='form_employees';
const DB_PORT =3306;
$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
$sql="CREATE DATABASE IF NOT EXISTS form_employees";
if(!mysqli_query($con,$sql)){
    echo "co loi xay ra".mysqli_error($con);
}
mysqli_close($con);
unset($sql);
$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
if(!$con){
    die('kết nối thất bại'.mysqli_error($con));
}
mysqli_query($con,'set names utf8');
