<?php
session_start();
require_once 'database.php';
//delete.php
//Thực hiện xóa bản ghi dựa theo id bắt đc từ url
//delete.php?id=1
//validate id hợp lệ
$id = $_GET['id'];
//tạo truy vấn
$sql_delete = "DELETE FROM students WHERE `id` = $id";
//thưc thi truy vấn
$is_delete = mysqli_query($connection, $sql_delete);
if ($is_delete) {
    $_SESSION['success'] = "Xóa bản ghi $id thành công";
} else {
    $_SESSION['error'] = "Xóa bản ghi $id thất bại";
}
header("Location: list.php");
exit();