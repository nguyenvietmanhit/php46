<?php
//CREATE TABLE students(
//    id INT(11) PRIMARY KEY AUTO_INCREMENT,
//    name VARCHAR(255),
//    age INT(11),
//    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//);
//INSERT INTO students(`name`, `age`)
//VALUES ('Manh1', 30), ('Manh2', 32), ('Manh3', 33), ('Manh4', 34), ('Manh5', 35);
//demo_connect_mysql.php
//Kết nối CSDL MySQL từ PHP, sử dụng thư viẹn
//mysqli do PHP cung cấp
//B1 - Khởi tạo kết nối
//các thông số này do XAMPP đã tự động tạo ra cho bạn
const DB_HOST = 'localhost';//tên server đang chứa mysql
const DB_USERNAME = 'root'; //username đăng nhập vào mysql
const DB_PASSWORD = ''; //password đăng nhập vào mysql
const DB_NAME = 'day16'; //tên csdl muốn kết nối
const DB_PORT = 3306;//cổng kết nối vào mysql

$connection =
    mysqli_connect(DB_HOST, DB_USERNAME,
        DB_PASSWORD, DB_NAME,
        DB_PORT);

if (!$connection) {
    die('Kết nối CSDL thất bại. Lỗi: '
        . mysqli_connect_error());
}

echo "<h2>Kết nối CSDL thành công</h2>";
//echo "<pre>";
//print_r($connection);
//echo "</pre>";

//2 - Thực thi các truy vấn sau khi kết nối csdl
//+ INSERT vào bảng students, đang có các trường là
//id, name, age, created_at
//viết câu truy vấn insert
$sql_insert =
    "INSERT INTO students(`name`, `age`)
     VALUES ('nvmanh1', 11), ('nvmanh2', 22),
     ('nvmanh3', 33), ('nvmanh', 44)
    ";
//thực thi truy vấn insert
//với các truy vấn insert, update, delete thì hàm
//mysqli_query sẽ trả về kiểu dữ liệu là boolean
$is_insert = mysqli_query($connection, $sql_insert);
if ($is_insert) {
    echo "Insert thành công vào bảng students";
} else {
    echo "Insert ko thành công";
}

//+ Truy vấn Update
//khai báo câu truy vấn
//luôn lưu ý khi update và delete phải kèm điều kiện
//where để biết đc đang thao tác với bản ghi nào
$sql_update =
    "UPDATE students
 SET `name` = 'New name' WHERE id = 1";
//thực thi truy vấn, với truy vấn insert,update
//,delete thì hàm mysqli_query sẽ trả về true/false
$is_update = mysqli_query($connection, $sql_update);
if ($is_update) {
    echo "update bản ghi với id = 1 thành công";
} else {
    echo "update bản ghi với id = 1 thất bại";
}
//+ Truy vấn DELETE, nhớ phải thêm điều kiện WHERE
//tạo câu truy vấn
$sql_delete = "DELETE FROM students WHERE id > 8";
//thực thi truy vấn, với truy vấn insert, delete,
//update thì hàm mysqli_query luôn trả về true/false
$is_delete = mysqli_query($connection, $sql_delete);
if ($is_delete) {
    echo "Xóa các bản ghi id > 8 thành công";
} else {
    echo "Xóa các bản ghi id < 8 thất bại";
}
// + Truy vấn SELECT
//Lấy ra tất cả bản ghi đang có trong bảng students
//tạo truy vấn select
$sql_select_all = "SELECT * FROM students";
//thực thi truy vấn, với truy vấn select, sẽ ko trả về
//kiểu dữ liệu true/false như insert, update, delete
//mà sẽ trả về 1 biến trung gian
$result_all =
    mysqli_query($connection, $sql_select_all);
//echo "<pre>";
//print_r($result_all);
//echo "</pre>";
//do kết quả trả về với truy vấn select đang là 1 object
//chưa rõ ràng, nên cần 1 số bước sau để chuyển đổi
//về kiểu dữ liệu mảng
$students = [];
//trả về số bản ghi đang có từ câu truy vấn, dựa vào
//key = num_rows của biến reuslt_all
$count_rows = mysqli_num_rows($result_all); //8
//kiểm tra nếu có bản ghi thì mới xử lý
if ($count_rows > 0 ) {
    //lấy tất cả bản ghi chuyển đổi từ biến result_all
    //thành kiểu dữ liệu mảng kết hợp dựa vào hằng số
//    MYSQLI_ASSOC
   $students = mysqli_fetch_all($result_all,
        MYSQLI_ASSOC);
}
echo "<pre>";
print_r($students);
echo "</pre>";

//+ Truy vấn SELECT lấy 1 bản ghi duy nhất
//tạo truy vấn
$sql_select_one =
    "SELECT * FROM students WHERE id = 1";
//thực thi truy vấn, trả về object trung gian do là
//truy vấn select
$result_one =
    mysqli_query($connection, $sql_select_one);
//khi mà chắc chắn câu truy vấn chỉ
// trả về 1 bản duy nhất, thì sẽ dùng hàm
//mysqli_fetch_assoc để trả về dữ liệu luôn
$student = mysqli_fetch_assoc($result_one);
echo "Thông tin bản ghi với id = 1";
echo "<pre>";
print_r($student);
echo "</pre>";

//Tính tổng số bản ghi trả về sử dụng hàm COUNT
$sql_select_count =
    "SELECT COUNT(id) AS count_id FROM students";
$result_count =
    mysqli_query($connection, $sql_select_count);
$arr_count = mysqli_fetch_assoc($result_count);
echo "<pre>";
print_r($arr_count);
echo "</pre>";
echo "Tổng số bản ghi đang có trong bảng
 students = " . $arr_count['count_id'];