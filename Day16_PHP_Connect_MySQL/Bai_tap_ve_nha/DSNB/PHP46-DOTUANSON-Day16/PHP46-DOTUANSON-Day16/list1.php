<?php
session_start();

require_once 'database1.php';
if (isset($_SESSION['success']))
{
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error']))
{
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
$sql_select_all="SELECT *FROM nhanvien";
$result_all=mysqli_query($connection,$sql_select_all);
$nhanvien=[];
if (mysqli_num_rows($result_all)>0)
{
    $nhanvien=mysqli_fetch_all($result_all,MYSQLI_ASSOC);
}
if (isset($_POST['add']))
{

    header('Location:create.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QLNHAN VIEN</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../CSS/all.min.css" type="text/css">
</head>
<body>
<form action="" method="post">
    <b>EMPLOYEES LIST</b>
    <button type="button" class="btn btn-success" name="add"><a href="create.php">+ Add New Employees</a></button>
    <table border="1" cellpadding="0">
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
            foreach ($nhanvien AS $nv):
        ?>
        <TR>
            <td>
                <?php
                echo $nv['id'];
                ?>
            </td>
            <td>
                <?php
                echo $nv['name'];
                ?>
            </td>
            <td>
                <?php
                echo $nv['description'];
                ?>
            </td>
            <td>
                <?php
                echo $nv['salary'];
                ?>
            </td>
            <td>
                <?php
                echo $nv['gender'];
                ?>
            </td>
            <td>

                <?php
                $birthday=date('d-m-y H:i:s',strtotime($nv['birthday']));
                echo $birthday;
                ?>

            </td>
            <td>
                <?php
                $create_at=date('d-m-y H:i:s',strtotime($nv['created_at']));
                echo $create_at;
                ?>
            </td>
            <td>
                <?php
                $link_update='update.php?id='.$nv['id'];
                $link_delete='delete.php?id='.$nv['id'];
                $link_nhin='nhin.php?id='.$nv['id'];

                ?>

                <a href="<?php echo $link_nhin?>"><i class="fas fa-eye"></i></a>
                <a href="<?php echo $link_update ?>"><i class="fas fa-pencil-alt"></i></a>
                <a href="<?php echo $link_delete?>" onclick="return confirm('Ban co muon xoa ko')"> <i class="fas fa-trash-alt"></i></a>



            </td>
        </TR>
        <?php
            endforeach;
        ?>
    </table>
</form>
</body>
</html>
