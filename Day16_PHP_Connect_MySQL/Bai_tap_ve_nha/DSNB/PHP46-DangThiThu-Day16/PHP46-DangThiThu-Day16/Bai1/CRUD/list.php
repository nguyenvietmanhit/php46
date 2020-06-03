<?php

session_start();

require_once 'database.php';

if (isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}


$sql_select_all = "SELECT * FROM employees";
//Thực thi truy vấn
$result_all = mysqli_query($connection, $sql_select_all);


$employees = [];

if (mysqli_num_rows($result_all) > 0) {
    $employees = mysqli_fetch_all($result_all, MYSQLI_ASSOC);

}





echo "<pre>";
print_r($employees);
echo "</pre>";

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Bai1.css">
</head>
<body>
<form>
    <h2>Employees List</h2>
    <a href="create.php" class="add">+Add New Employeez</a>

    <table border="1" cellpadding="10" cellspacing="0">


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
        <?php foreach ($employees AS $employee) : ?>

            <tr>
                <td><?php echo $employee['id']; ?></td>
                <td><?php echo $employee['name']; ?></td>
                <td><?php echo $employee['description']; ?></td>
                <td><?php echo $employee['salary']; ?></td>
                <td>
                    <?php
                    $arr = array(
                            0 => "Male",
                            1 => "Female"
                    );
                    echo $arr[$employee['gender']];
                    ?>

                </td>
                <td>
                    <?php
                    $birthday = date('d-m-Y', strtotime($employee['birthday']));
                    echo  $birthday;
                    ?>
                </td>
                <td>
                    <?php
                    $created_at = date('d-m-Y H:i:s', strtotime($employee['created_at']));
                    echo $created_at;
                    ?>
                </td>
                <td>
                    <?php

//                    $link_update = 'update.php?id=' . $employee['id'];
                    $link_list = 'list.php?id=' . $employee['id'];
                    $link_view = 'View.php?id=' .$employee['id'];
                    $link_update = 'update.php?id=' .$employee['id'];
                    ?>
<!--                    <a href="--><?php //echo $link_update?><!--">Sửa</a>-->

                    <a href="<?php echo $link_view?>">
                        <svg class="bi bi-eye" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                            <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </a>

                    <a href="<?php echo $link_update ?> ">
                        <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                        </svg>
                    </a>


                    <a href="<?php echo $link_list?>"
                       onclick="return confirm('Are you sure delete?')" name="delete">
                        <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</form>
</body>
</html>





