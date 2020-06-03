<?php
session_start();
require_once 'database.php';
if(isset($_SESSION['success1'])){
    echo $_SESSION['success1'];
    unset($_SESSION['success1']);
}
if(isset($_SESSION['success2'])){
    echo $_SESSION['success2'];
    unset($_SESSION['success2']);
}
if (isset($_SESSION['error2'])){
    echo $_SESSION['error2'];
    unset($_SESSION['error2']);
}
if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}

$sql_select_all = "SELECT * FROM employees";
$result_all = mysqli_query($connection, $sql_select_all);
$employees = [];
if (mysqli_num_rows($result_all) > 0){
    $employees = mysqli_fetch_all($result_all,MYSQLI_ASSOC);
}
$id = -1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql_delete = "DELETE FROM employees WHERE id = $id";
$is_delete = mysqli_query($connection, $sql_delete);
if($is_delete){
    $_SESSION['success2'] = "Xóa nhân viên thành công";
}else{
    $_SESSION['error2'] = "Xóa nhân viên thất bại";
}


?>
<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/ad59a2fbb0.js"></script>
    <style>
        .header{
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="header">
        <h3>Create Record</h3>
        <a href="create.php"><button type="submit" class="btn btn-success">+Add New Employess</button></a>
    </div>
    <table style="width: 100%">
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
        <?php foreach ($employees AS $employes): ?>

            <tr>
                <td><?php echo $employes['id']; ?></td>
                <td><?php echo $employes['name']; ?></td>
                <td><?php echo $employes['description']; ?></td>
                <td><?php echo $employes['salary']; ?></td>
                <td><?php
                    $array = array(
                            0 => "Male",
                            1 => "Female"
                    );
                    echo $array[$employes['gender']];
                ?></td>
                <td><?php echo $employes['birthday']; ?></td>
                <td><?php echo $employes['created_at']; ?></td>
                <td>
<!--                    --><?php
//                    $link_info = 'info.php?id'.$employes['id'];
//                    $link_update = 'update.php?id'.$employes['id'];
//                    $link_delete = 'delete.php?id'.$employes['id'];
//                    ?>
                    <a href="info.php?id=<?php echo $employes['id'];?>"><i class="fa fa-eye"></i></a>
                    <a href="update.php?id=<?php echo $employes['id'];?>"><i class="fa fa-pencil"></i></a>
                    <a href="list.php?id=<?php echo $employes['id']?>"onclick="return confirm('Muốn xóa?')">
                        <i class="fa fa-trash"></i></a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>
</body>
</html>