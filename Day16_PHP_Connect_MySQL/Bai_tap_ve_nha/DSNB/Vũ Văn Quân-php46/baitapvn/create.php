<?php
    require_once ("database.php");
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
            $sql_insert = "insert into employees(`name`,`description`,`salary`,`gender`,`birthday`)values('$name','$description','$salary','$gender_text','$birthday')";
            $is_insert = mysqli_query($connection, $sql_insert);
            if ($is_insert) {
                $_SESSION["success"] = "Thêm Mới Thành Công";
            } else {
                $_SESSION["error"] = "Thêm Mới Thất Bại";
            }

            header("location:list.php");
            exit();
        }
    }
?>
<div>

    <form action="" method="POST">
        <div>
            <div>
                <td>Name : <span style="color:red;">*</span> </td>
                <input type="text"  name="name" value="">
                <p>
                    <?php echo isset($error) ? $error : '';?>
                </p>
            </div>
            <div>
                <td>Description : </td>
                <input type="text" name="description" value="">
            </div>
            <div>
                <td >Salary : </td>
                <input type="text"  name="salary" value=""  >
            </div>
            <div>
                <td >Gender : </td>
                <br>
                <input type="radio"  name="gender" value="1"> Male
                <input type="radio"  name="gender" value="0" > Female
            </div>
            <div>
                <td >Birthday : </td>
                <input type="date"  value="" name="birthday">
            </div>

                <input type="submit" value="Save" name="submit" >
                <input type="reset" value="Cancel" >
        </div>
    </form>
</div>

