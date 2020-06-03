<?php
session_start();
require_once 'connection.php';
if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
if(isset($_SESSION['updatedone'])){
    echo $_SESSION['updatedone'];
    unset($_SESSION['updatedone']);
}
if(isset($_SESSION['updatednt'])){
    echo $_SESSION['updatednt'];
    unset($_SESSION['updatednt']);
}
if(isset($_SESSION['deletedone'])){
    echo $_SESSION['deletedone'];
    unset($_SESSION['deletedone']);
}
if(isset($_SESSION['deletednt'])){
    echo $_SESSION['deletednt'];
    unset($_SESSION['deletednt']);
}


$query_select="Select * from nhanvien_tb";
$resutl=mysqli_query($connection,$query_select);
$nhanviens=[];
$count_rows=mysqli_num_rows($resutl);
if($count_rows>0){
    $nhanviens=mysqli_fetch_all($resutl,MYSQLI_ASSOC);
}else{
    echo "không có bản ghi nào";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel="stylesheet" href="all.min.css">-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Employees List</h1>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-success"><a style="color: white" href="create.php">Add new employees</a></button>
        </div>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>

                <?php foreach ($nhanviens as $nhanvien):?>
                    <tr>
                        <td><?php echo $nhanvien['id']?></td>
                        <td><?php echo $nhanvien['name']?></td>
                        <td><?php echo $nhanvien['desciption']?></td>
                        <td><?php echo $nhanvien['salary']?></td>
                        <?php if ($nhanvien['gender']==0):?>
                            <td> FeMale</td>
                        <?php else:?>
                            <td>Male</td>
                        <?php endif;?>
                        <td><?php echo date('d-m-Y H:i:m',strtotime($nhanvien['birtday']))?></td>
                        <td><?php echo date('d-m-Y H:i:m',strtotime($nhanvien['created_at']))?></td>
                        <td>
                            <?php
                                $chitiet="read.php?id=".$nhanvien['id'];
                                $update="update.php?id=".$nhanvien['id'];
                                $delete="delete.php?id=".$nhanvien['id'];
                            ?>
                            <a href="<?php echo $chitiet?>">
                                <span class="fa fa-eye"></span>
                            </a> &nbsp;
                            <a href="<?php echo $update?>">
                                <span class="fa fa-pencil"></span>
                            </a> &nbsp;
                            <a href="<?php echo $delete?>"
                               onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này hay không?');">
                                <span class="fa fa-trash"></span>
                            </a> &nbsp;
                        </td>
                    </tr>
                <?php endforeach;?>

        </table>
    </div>
</div>

</body>
</html>
