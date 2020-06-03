<?php
session_start();
require_once 'database.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
if(isset($_GET['submit'])){
    header('Location: create.php');
    exit();
}
$sql_select="SELECT * FROM employees";
$result_all=mysqli_query($con,$sql_select);
$employees=[];
if(mysqli_num_rows($result_all)>0){
    $employees=mysqli_fetch_all($result_all,MYSQLI_ASSOC);
//    echo"<pre>";
//    print_r($employees);
//    echo"</pre>";
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Employees List</h2>
        </div>
        <div class="col-md-6">
            <form action="" method="get">
                <input type="submit" name="submit" value="+Add New Employees" class="btn-success btn float-right">
            </form>
<!--            <a href="create.php" class="btn btn-success float-right">+Add New Employees</a>-->
        </div>
    </div>
    <hr>
    <table cellspacing="0" border="1" cellpadding="10 30">
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
        <?php
        foreach ($employees as $employee):
        ?>
        <tr>
            <td><?php echo $employee['id']?></td>
            <td><?php echo $employee['name']?></td>
            <td><?php echo $employee['description']?></td>
            <td><?php echo $employee['salary']?></td>
            <td><?php
                switch ($employee['gender']){
                    case 0: echo "Female"; break;
                    case 1: echo "Male"; break;
                }
               ?></td>
            <td><?php
                $birthday =date('d-m-Y ',strtotime($employee['birthday']));
                echo $birthday;
                ?></td>
            <td><?php
                $created_at =date('d-m-Y H:i:s', strtotime($employee['created_at']));
                echo $created_at?></td>
            <td>
                <?php
                $link_update='update.php?id='.$employee['id'];
                $link_delete='delete.php?id='.$employee['id'];
                $link_read='read.php?id='.$employee['id'];
                ?>
                <a href="<?php echo $link_read?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="<?php echo $link_update?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="<?php echo $link_delete?>" onclick="return confirm('Are you sure delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>
</div>
</body>
</html>