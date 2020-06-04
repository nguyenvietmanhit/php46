<?php
session_start();
require_once 'database.php';
//file update.php
//Hiển thị chức năng update student
//chức năng update là chức năng tốn nhiều công sức nhất
//của CRUD
//phải biết được id của bản ghi cần đc update
//update.php?id=1
//lấy giá trị id bắt từ url trên
//có 1 bước validate, nếu ko truyền tham số id hoặc id ko phải
//là số, sẽ báo lỗi, và chuyển hướng về trang danh sách
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'ID ko hợp lệ';
    header('Location: list.php');
    exit();
}

$id = $_GET['id'];
//lấy thông tin sinh viên dựa vào id vừa bắt được, và hiển thị
//ra form update
//tạo câu truy vấn
$sql_select_one = "SELECT * FROM students WHERE `id` = $id";
//thực thi truy vấn
$result_one = mysqli_query($connection, $sql_select_one);
$student = mysqli_fetch_assoc($result_one);
//xử lý submit form
if (isset($_POST['submit'])) {
    //thực hiện các bước xử lý form tương tự như chức năng
//    thêm mới
}
?>
<!--đổ dữ liệu ra form sau khi lấy đc thông tin của sinh viên
tương ứng
-->
<form action="" method="post">
    Name:
    <input type="text" name="name"
           value="<?php echo $student['name']?>" />
    <br />
    Age:
    <input type="number" name="age"
           value="<?php echo $student['age']?>" />
    <br />
    <input type="submit" name="submit" value="Update" />
    <input type="reset" value="Reset" />
</form>
