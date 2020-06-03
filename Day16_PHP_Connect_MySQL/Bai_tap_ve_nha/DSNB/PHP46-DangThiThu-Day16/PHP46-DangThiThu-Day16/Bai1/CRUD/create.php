<?php
session_start();
require_once 'database.php';

$error ='';
echo "<pre>";
print_r($_POST);
echo "</pre>";

//Xử lý user submit form
if (isset($_POST['submit'])){
    //Gán dữ liệu
    $name = $_POST['name'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];

    //Validate form
    if (empty($name)){
        $error = "Name không được để trống";
    }

    //Lưu dữ liệu vào bảng khi error rỗng
    if (empty($error)){
        //Tạo câu truy vấn insert
        $sql_insert = "INSERT INTO employees(`name`, `description`, `gender`, `salary`, `birthday`)
                         VALUES ('$name', '$description', '$gender', '$salary', '$birthday')";
        //Thực thi truy vấn
        $is_insert  = mysqli_query($connection, $sql_insert);
        if ($is_insert) {
            $_SESSION['success'] = "Thêm mới thành công";
        } else{
            $_SESSION['error'] = "Thêm mới thất bại";
        }
        header('Location: list.php');
        exit();
    }



    $gender_text = '';
    if (isset($_POST['gender'])){
        switch ($_POST['gender']){
            case 0: $gender_text = "Female";
                break;
            case 1: $gender_text ="Male";
                break;
        }
    }
}
?>

<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Bai1.css">
</head>
<body>
<form action="" method="post">
    <div class="container">
        <div class="content">
            <h2>Create Record</h2>


            <label>Name <span>*</span></label>
            <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''?>" class="form-control">
            <br>
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : ''?></textarea>
            <br>
            <label>Salary</label>
            <input type="number" name="salary" value="<?php echo isset($_POST['salary']) ? $_POST['salary'] : ''?>" class="form-control">
            <br>
            <label>Gender</label>
            <br>
            <?php
            //Xử lý checked cho radio
            //Có bao nhiêu radio sẽ có bấy nhiêu biến dạng checked
            $gender_female ='';
            $gender_male='';
            if (isset($_POST['gender'])){
                switch ($_POST['gender']){
                    case 0: $gender_female = 'checked';
                        break;
                    case  1: $gender_male ='checked';
                        break;
                }
            }
            ?>
            <input type="radio" name="gender" value="0" <?php echo $gender_female; ?> > Male
            <input type="radio" name="gender" value="1"<?php echo $gender_male; ?> > Female
            <br>
            <label>Birthday</label>
            <input type="date" name="birthday" class="form-control"
                   value="<?php echo isset($_POST['birthday']) ? $_POST['birthday'] : ''?>">
            <br>
            <input type="submit" name="submit" value="Save" class="btn-primary btn-lg">
            <input type="submit" name="cancel" value="Cancel" class="btn-lg">

        </div>
    </div>
</form>
</body>
</html>