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
                $_SESSION["success"] = "Update Thành Công";
            } else {
                $_SESSION["error"] = "Update Thất Bại";
            }
            header("location:list.php");
            exit();
        }
    }
?>
<div class="container">
    <form action="" method="POST">
        <div>
            <div>
                <td>Name : <span style="color:red;">*</span> </td>
                <input type="text" name="name" value="<?php echo isset($employees["name"]) ? $employees["name"]: '' ;?>" >
                <p>
                    <?php echo isset($error) ? $error : '';?>
                </p>
            </div>
            <div >
                <td >Description : </td>
                <textarea ><?php echo isset($employees["description"]) ? $employees["description"]: '' ;?></textarea>
            </div>
            <div>
                <td >Salary : </td>
                <input type="text" name="salary"  value="<?php echo isset($employees["salary"]) ? $employees["salary"] : "" ?>">
            </div>
            <div>
                <td >Gender : </td>
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
                <input type="radio"  <?php echo $gender1;?> value="1"> Male
                <input type="radio"  <?php echo $gender;?>  value="0" > Female
            </div>
            <div>
                <td >Birthday : </td>
                <input type="date" value="<?php echo isset($employees["birthday"]) ?$employees["birthday"] : '' ; ?>" name="birthday">
            </div>

            <input type="submit" value="Save" name="submit">
            <a href="list.php" ><input type="#" name="Cancel" value="Cancel"></a>
        </div>
    </form>
</div>

