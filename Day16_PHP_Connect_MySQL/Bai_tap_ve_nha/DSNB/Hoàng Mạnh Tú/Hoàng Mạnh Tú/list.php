<?php
    require_once ("database.php");
    session_start();
    $sql_select="select * from employees";
    $result_all=mysqli_query($connection,$sql_select);
    $employees=[];
    if(mysqli_num_rows($result_all) > 0)
    {
        $employees=mysqli_fetch_all($result_all,MYSQLI_ASSOC);
    }
?>
<div class="container">
    <style>
        .add {margin:20px 0px;float:right;font-size: 13px;}
        a { color: black;}
        a:hover{color: red}
    </style>
    <?php if(isset($_SESSION["success"])): ?>
    <div class="alert alert-success" role="alert">
        <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span class="sr-only">Success:</span>
        <?php echo $_SESSION["success"]; ?>
        <?php unset($_SESSION["success"]);?>
    </div>
    <?php endif;?>
    <?php if(isset($_SESSION["error"])): ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            <?php echo $_SESSION["error"]; ?>
            <?php unset($_SESSION["error"]);?>
        </div>
    <?php endif;?>
    <a href="create.php" class="btn btn-success add"><span class="glyphicon glyphicon-plus"></span> Add New Employee</a>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Salary</th>
            <th scope="col">Gender</th>
            <th scope="col">Birthday</th>
            <th scope="col">Create_at</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($employees as $value):?>
        <tr>
            <th scope="row"><?php echo $value['id']; ?></th>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['description']; ?></td>
            <td><?php echo number_format($value['salary']); ?></td>
            <td>
                <?php
                switch($value["gender"])
                {
                    case 0:
                        echo "FeMale";
                        break;
                    case 1:
                        echo "Male";
                        break;
                }
                ?>
            </td>
            <td>
                <?php $birthday=date('d-m-y',strtotime($value['birthday']));
                    echo $birthday;
                ?>
            </td>
            <td>
                <?php
                    $create_at=date("d-m-y h:i:s",strtotime($value["created_at"]));
                    echo $create_at;
                ?>
            </td>
            <td >
                <?php
                    $link_see="see.php?id=".$value["id"];
                    $link_update="update.php?id=".$value["id"];
                    $link_delete="delete.php?id=".$value["id"];
                ?>
                <a href="<?php echo $link_see ;?>" class="glyphicon glyphicon-eye-open"></a> &nbsp;&nbsp;&nbsp;
                <a href="<?php echo $link_update ;?>" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;
                <a href="<?php echo $link_delete ;?>" class="glyphicon glyphicon-trash" onclick="return window.confirm('Bạn có chắc chắn muốn xóa không ? ')"></a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
