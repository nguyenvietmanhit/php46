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
                <input type="text" class="form-control" name="name" value="">
                <p class="error">
                    <?php echo isset($error) ? $error : '';?>
                </p>
            </div>
            <div class="form-group">
                <label >Description : </label>
                <textarea name="description" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label >Salary : </label>
                <input type="text" class="form-control" name="salary" value=""  placeholder="salary">
            </div>
            <div class="form-group">
                <label >Gender : </label>
                <br>
                <input type="radio"  name="gender" value="1"> Male
                <input type="radio"  name="gender" value="0" > Female
            </div>
            <div class="form-group">
                <label >Birthday : </label>
                <input type="date" class="form-control" value="" name="birthday">
            </div>

                <input type="submit" value="Save" name="submit" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-dark">
        </div>
    </form>
</div>

