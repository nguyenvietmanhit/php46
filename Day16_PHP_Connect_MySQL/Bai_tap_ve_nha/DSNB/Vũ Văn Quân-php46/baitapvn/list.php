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
    </style>
    <?php if(isset($_SESSION["success"])): ?>
    <div>
        <span></span>
        <span>Success:</span>
        <?php echo $_SESSION["success"]; ?>
        <?php unset($_SESSION["success"]);?>
    </div>
    <?php endif;?>
    <?php if(isset($_SESSION["error"])): ?>
        <div>
            <span></span>
            <span>Error:</span>
            <?php echo $_SESSION["error"]; ?>
            <?php unset($_SESSION["error"]);?>
        </div>
    <?php endif;?>
    <a href="create.php"><span></span> Add New </a>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Description</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Salary</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Gender</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Birthday</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Create_at</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($employees as $value):?>
        <tr>
            <th><?php echo $value['id']; ?></th>
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
                    $create_at=date("m-d-y h:i:s",strtotime($value["created_at"]));
                    echo $create_at;
                ?>
            </td>
            <td >
                <?php
                    $link_see="see.php?id=".$value["id"];
                    $link_update="update.php?id=".$value["id"];
                    $link_delete="delete.php?id=".$value["id"];
                ?>
                <a href="<?php echo $link_see ;?>" ></a> &nbsp;&nbsp;&nbsp;
                <a href="<?php echo $link_update ;?>" ></a>&nbsp;&nbsp;&nbsp;
                <a href="<?php echo $link_delete ;?>"  onclick="return window.confirm('Bạn có chắc chắn muốn xóa không ? ')"></a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
