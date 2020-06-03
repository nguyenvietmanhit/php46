<?php
    require_once ("database.php");
    $id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
    $sql_delete="delete from employees where id=$id";
    $is_delete=mysqli_query($connection,$sql_delete);
    if($is_delete)
    {
        $_SESSION["success"]="Xóa Thành Công";
    }
    else
    {
        $_SESSION["error"] =" Xóa Thất Bại";
    }
    header("location:list.php");
    exit();
?>