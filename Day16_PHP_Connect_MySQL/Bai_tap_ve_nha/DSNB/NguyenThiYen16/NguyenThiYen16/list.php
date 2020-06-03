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
    $result_all = mysqli_query($connection, $sql_select_all);
    $employees = [];
    if (mysqli_num_rows($result_all) > 0){
        $employees = mysqli_fetch_all($result_all, MYSQLI_ASSOC);
    }
//    echo "<pre>";
//    print_r($employees);
//    echo "</pre>";
?>
<button style="margin-left: 600px;"><a href=""">Add New Employess</a></button>
<table cellpadding="5" border="1" style="border-collapse: collapse; margin-top: 20px;">
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
    <?php foreach ($employees as $employee):?>
    <tr>
        <td><?php echo $employee['id']; ?></td>
        <td><?php echo $employee['name']; ?></td>
        <td><?php echo $employee['description']; ?></td>
        <td><?php echo $employee['salary']; ?></td>
        <td><?php echo $employee['gender']; ?></td>
        <td>
            <?php
                $birth = date('d-m-y', strtotime($employee['birthday']));
                echo $birth;
            ?>
        </td>
        <td>
            <?php
                $created_at =date('d-m-y H:i:s', strtotime($employee['created_at']));
                echo $created_at;
            ?>
        </td>
        <td>
            <?php
                $link_view = 'view.php?id=' . $employee['id'];
                $link_update = 'update.php?id=' . $employee['id'];
            ?>
            <a href="<?php echo $link_view ?>">View</a>
            <a href="<?php $link_update ?>">Update</a>
            <a href="<?php?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
