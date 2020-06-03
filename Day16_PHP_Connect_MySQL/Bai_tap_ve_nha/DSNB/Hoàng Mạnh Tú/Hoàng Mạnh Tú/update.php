<?php
    require_once ("select_one.php");
    session_start();
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $error='';
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $description=$_POST["description"];
        $salary=$_POST["salary"];
        $gender=isset($_POST["gender"])? $_POST["gender"] : "";
        $birthday=$_POST["birthday"];
        if(empty($name))
        {
            $error="* Trường này không được để trống";
        }
        $gender_text='';
        if(isset($gender))
        {
            switch ($gender)
            {
                case 0:
                    $gender_text = "0";
                    break;
                case 1:
                    $gender_text = "1";
                    break;
            }
        }
        if(empty($error))
        {
            $sql_update = " update employees set `name` = '$name', `description`= '$description',`salary`='$salary',`gender`='$gender',`birthday`='$birthday' where id =$id ";
            $is_update = mysqli_query($connection, $sql_update);
            if ($is_update) {
                $_SESSION["success"] = "Sửa Thành Công";
            } else {
                $_SESSION["error"] = "Sửa Thất Bại";
            }
            header("location:list.php");
            exit();
        }
    }
?>
<style>
    .error
    {
        font-size: 12px;
        font-style : italic;
        color: red;
    }

</style>
<div class="container">
    <form action="" method="POST">
        <div class="row col-sm-6 ">
            <div class="form-group">
                <label>Name : <span style="color:red;">*</span> </label>
                <input type="text" class="form-control" name="name" value="<?php echo isset($employees["name"]) ? $employees["name"]: '' ;?>"  placeholder="name ">
                <p class="error">
                    <?php echo isset($error) ? $error : '';?>
                </p>
            </div>
            <div class="form-group">
                <label >Description : </label>
                <textarea name="description" class="form-control" ><?php echo isset($employees["description"]) ? $employees["description"]: '' ;?></textarea>
            </div>
            <div class="form-group">
                <label >Salary : </label>
                <input type="text" class="form-control" name="salary"  value="<?php echo isset($employees["salary"]) ? $employees["salary"] : "" ?>"  placeholder="salary">
            </div>
            <div class="form-group">
                <label >Gender : </label>
                <br>
                <?php
                $gender="";
                $gender1="";
                if(isset($employees["gender"])) {
                    switch ($employees["gender"]) {
                        case 0:
                            $gender = "checked";
                            break;
                        case 1:
                            $gender1 = "checked";
                            break;
                    }
                }
                ?>
                <input type="radio"  name="gender" <?php echo $gender1;?> value="1"> Male
                <input type="radio"  name="gender" <?php echo $gender;?>  value="0" > Female
            </div>
            <div class="form-group">
                <label >Birthday : </label>
                <input type="date" class="form-control" value="<?php echo isset($employees["birthday"]) ?$employees["birthday"] : '' ; ?>" name="birthday">
            </div>

            <input type="submit" value="Save" name="submit" class="btn btn-success">
            <a href="list.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>

