<?php
session_start();
require_once "connection.php";
$query_delete="Delete from nhanvien_tb where id=".$_GET['id'];
$is_delete=mysqli_query($connection,$query_delete);
if($is_delete){
    $_SESSION['deletedone']="xóa thành công";
}else{
    $_SESSION['deletednt']="xóa thất bại";
}
header("Location:list.php");
exit();
