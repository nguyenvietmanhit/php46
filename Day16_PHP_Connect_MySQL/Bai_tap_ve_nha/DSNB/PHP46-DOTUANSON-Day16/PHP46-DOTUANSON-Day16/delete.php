<?php
session_start();
require_once 'database1.php';

mysqli_select_db($connection,'qlnhanvien');
$sql_delete="DELETE FROM nhanvien WHERE id='$_POST[id]'";
$is_delete=mysqli_query($connection,$sql_delete);
if ($is_delete)
{
    header('Location:list1.php');
    exit();}
else echo "NOT DELETE";

?>