<?php
    require_once ("database.php");
    $id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
    $select_one="select * from employees where id=$id";
    $result_one=mysqli_query($connection,$select_one);
    $employees = mysqli_fetch_assoc($result_one);
?>