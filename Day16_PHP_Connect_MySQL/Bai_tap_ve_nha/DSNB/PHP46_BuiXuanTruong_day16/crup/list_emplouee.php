<?php
session_start();
if(isset($_SESSION['success'])){
    echo"<h3 style='color:green'>";
    echo $_SESSION['success'];
    echo"</h3>";
}
unset($_SESSION['error']);
if(isset($_SESSION['error'])){
    echo"<h3 style='color:red'>";
    echo $_SESSION['error'];
    echo"</h3>";
}
unset($_SESSION['error']);
require_once 'database_employee.php';
$querySelect="select * from employees";
$isSelect=mysqli_query($connection,$querySelect);
if(mysqli_num_rows($isSelect)>0){
    $employees=mysqli_fetch_all($isSelect,MYSQLI_ASSOC);
}
mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
    <title>bai_tap_connect_mysql_with_php</title>
    <meta charset="utf8"/>
    <style>
        .fas{
            color:blue;
        }
        .add-new-employees{
            color:#fff;
            background: green;
            padding: 6px;
            position: fixed;
            right: 20%;
        }
        .container{
            margin:30px auto;
            position: relative;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="create_record.php" class="add-new-employees">+Add New Employees</a>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Created_at</th>
            <th>Action</th>
        </tr>
            <?php foreach($employees as $key=> $employee):?>
                <tr>
                    <td>
                        <?php
                        echo $employee['id'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $employee['name'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $employee['description'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $employee['salary'];
                        ?>
                    </td>
                    <td>
                        <?php
                        $_SESSION['genderText']='';
                        $gender=$employee['gender'];
                        if($gender==1){
                            $_SESSION['genderText']='Male';
                        }
                        else{
                            $_SESSION['genderText']='Female';
                        }
                        echo $_SESSION['genderText'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $employee['birthday'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $employee['created_at'];
                        ?>
                    </td>
                    <td>
                        <a href="">Chi tiết</a> /
                        <a href="">Sửa</a> /
                        <a href="">Xóa</a>
                    </td>
                </tr>
            <?php endforeach;?>
    </table>
</div>
</body>
</html>