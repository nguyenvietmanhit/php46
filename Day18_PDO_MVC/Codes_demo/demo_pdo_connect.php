<?php
#Tạo 1 bảng students có các trường id, name, age, created_at
//CREATE TABLE students(
////    id INT(11) PRIMARY KEY AUTO_INCREMENT,
////    name VARCHAR(255),
////    age INT(11),
////    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
////)
//demo_pdo_connect.php
//PDO - PHP Data Object - là 1 chuẩn kết nối CSDL theo cơ chế hoàn
//toàn hướng đối tượng
//PDO cho phép kết nối vào nhiều hệ CSDL khác nhau, trong khi mysqli
//chi cho phép kết nối vào CSDL MySQL
//Thực hiện các bước sau để kết nối CSDL theo cơ chế PDO
//1 - Khởi tạo kết nối
//khai báo data source name - thông tin chuỗi kết nối theo
//cơ chế PDO, lưu ý phải chính xác, ko đc chứa dấu cách
const DB_DSN = 'mysql:host=localhost;port=3306;
dbname=day18;charset=utf8';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
//tạo ra 1 biến kết nối, là đối tượng của class PDO - là class
//mà PHP xây dựng sẵn cho việc kết nối csdl theo cơ chế pdo
$connection = new PDO(DB_DSN, DB_USERNAME,
    DB_PASSWORD);
if (!$connection) {
    die("Kết nối thất bại");
}
echo "Kết nối thành công";

//CSDL: day18, table: students - id, name, age, created_at
//1 - Truy vấn INSERT với PDO
//khai báo câu truy vấn insert
//PDO hỗ trợ cơ chế khai báo các giá trị của từng trường trong bảng
//theo kiểu placeholder (tham số)
//kiểu placeholder này sẽ giúp chống lỗi bảo mật SQL Injection
//mà khi sử dụng thư viên mysqli sẽ rất dễ mắc phải
//có thể truyền giá trị thật mà ko cần tạo kiểu placeholder,
//tuy nhiên như vậy sẽ ko bảo mật
$sql_insert = "INSERT INTO students(`name`, `age`)
            VALUES(:name_param, :age_param)";
//tạo đối tượng truy vấn
$obj_insert = $connection->prepare($sql_insert);
//gán các giá trị thật cho placeholder
//có bao nhiều placeholder thì mảng sẽ có từng đó phần tử
//tương ứng (vd: 2 placeholder -> 2 phần tử tương ứng)
$arr_insert = [
    ':name_param' => 'Mạnh',
    ':age_param' => 30
];
//thực thi câu truy vấn
//với truy vấn insert, update, delete thì hàm execute sẽ trả
//về true/false
$is_insert = $obj_insert->execute($arr_insert);
//nếu việc truy vấn thất bại, có thể dùng hàm debugDumpParams
//bên dưới hàm execute để có thêm thông tin về lỗi
//$debug = $obj_insert->debugDumpParams();
//echo "<pre>";
//print_r($debug);
//echo "</pre>";
if ($is_insert) {
    echo 'Insert thành công';
} else {
    echo 'Insert thất bại';
}

//2  -Truy vấn UPDATE, update bản ghi với id = 1, set name = 'abc'
//tạo câu truy vấn update theo kiểu placeholder
//nếu giá trị chắc chắn là số thì ko cần placeholder
//vì lỗi bảo mật SQL Injection thường xảy ra khi dữ liệu là chuỗi
$sql_update = "UPDATE students SET `name` = :name WHERE id = 1";
//tạo đối tượng update
$obj_update = $connection->prepare($sql_update);
//tạo 1 mảng để gán giá trị cho các placeholder trong
//câu truy vấn (vd: 1 placeholder => mảng chỉ có 1 phần tử)
$arr_update = [
    ':name' => 'abc',
];
//thực thi truy vấn,
$is_update = $obj_update->execute($arr_update);
if ($is_update) {
    echo "Update bản ghi id = 1 thành công";
} else {
    echo "Update bản ghi id = 1 thất bại";
}

//3 - Truy vấn DELETE theo PDO, xóa các bản ghi mà có id > 5
//tao câu truy vấn xóa, nếu biết chắn chắn giá trị là số
//thì ko cần tạo placeholder
$sql_delete = "DELETE FROM students WHERE id > 5";
//tạo 1 đối tượng delete
$obj_delete = $connection->prepare($sql_delete);
//do câu truy vấn ko có placeholder nào cả, nên bỏ qua bước tạo
//mảng các placeholder
//thực thi truy vấn
$is_delete = $obj_delete->execute();
if ($is_delete) {
    echo 'Xóa các bản ghi id > 5 thành công';
} else {
    echo 'Xóa các bản ghi id > 5 thất bại';
}

//4 - Truy vấn SELECT theo cơ chế PDO
//- Truy vấn nhiều bản ghi, vd: lấy ra tất cả bản ghi đang có
// trong bảng students
//tạo câu truy vấn select
$sql_select_all = "SELECT * FROM students";
//tạo 1 đối tượng select
$obj_select_all = $connection->prepare($sql_select_all);
//thực thi truy vấn, do ko có placeholder nên ko cần khai báo mảng
//do truy vấn select thì hàm execute sẽ ko trả về true/false
//nên cần thực hiện thêm 1 vài bước để lấy đc dữ liệu mong muốn
$obj_select_all->execute();
//sau khi chạy hàm execute xong, thì biến $obj_select_all tương
//đương như 1 đối tượng trung gian, và sẽ sử dụng đối tượng này
//để lấy ra mảng dữ liệu mong muốn
//phải truyền vào hằng FETCH_ASSOC của class PDO
//để mảng trả về là 1 mảng kết hợp, dễ thao tác hơn
$students = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($students);
echo "</pre>";

// - Truy vấn 1 bản ghi, lấy ra thông tin bản ghi đang có id = 1
$sql_select_one = "SELECT * FROM students WHERE id = 1";
$obj_select_one = $connection->prepare($sql_select_one);
$obj_select_one->execute();
//nếu biết chắn chắn chỉ lấy 1 bản ghi thì sẽ dùng hàm fetch
$student = $obj_select_one->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($student);
echo "</pre>";

// Truy vấn select lấy thông tin theo cột, vd: đếm tổng số bản ghi
//đang có trong bảng students
$sql_select_count = "SELECT COUNT(id) AS count_id FROM students";
$obj_select_count = $connection->prepare($sql_select_count);
$obj_select_count->execute();
//lấy giá trị của trường count_id sử dụng hàm fetchColumn,
//mà ko cần thao tác với mảng như 2 trường hợp select trên
$count = $obj_select_count->fetchColumn();
print_r($count);
