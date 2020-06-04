<?php
//list_student.php, ngang hàng với file demo_php_ajax.php
//thực hiện kết nối csdl và lấy ra thông tin tất cả sinh viên
//đang có trong bảng students, db: php16
//do nơi gọi ajax đang sử dụng phương thức POST,
//thì tại file .php này cũng sẽ bắt được dữ liệu gửi từ ajax
//lên thông qua mảng $_POST tương ứng
echo "<pre>";
print_r($_GET);
echo "</pre>";
//kết nối CSDL sử dụng mysqli
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'day16';
const DB_PORT = 3306;

$connection = mysqli_connect(DB_HOST, DB_USERNAME,
    DB_PASSWORD, DB_NAME, DB_PORT);
if (!$connection) {
    die("Lỗi kết nối: " . mysqli_connect_error());
}
echo 'KẾt nối CSDL thành công';
//tạo truy vấn select
$sql_select_all = "SELECT * FROM students";
//thực thi truy vấn
$result_all = mysqli_query($connection, $sql_select_all);
$students = [];
if(mysqli_num_rows($result_all) > 0) {
    $students = mysqli_fetch_all($result_all, MYSQLI_ASSOC);
}
?>
<table border="1" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <?php foreach($students AS $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
