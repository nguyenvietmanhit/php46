<?php
session_start();
require_once 'database.php';
if(!isset($_GET['id'])){
    $_SESSION['error']='ID khong hop le';
    header('Location: list.php');
    exit();
}
$id=$_GET['id'];
$sql_delete="DELETE FROM employees WHERE id=$id";
$is_delete=mysqli_query($con,$sql_delete);
if($is_delete){
    $_SESSION['success']="Xóa thành công bản ghi có id =$id";
}else{
    $_SESSION['error']="Xóa $id không thành công";
}
header('Location: list.php');
exit();
?>