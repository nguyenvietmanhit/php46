<?php
//nhúng file config db để sử dụng đc các hằng kết nối
require_once 'configs/database.php';
class Student {
    //chứa thông tin kết nối CSDL
    public $connection;
    //khai báo thêm các thuộc tính mapping -ánh xạ với các trường
    //trong bảng students của bạn
    public $id;
    public $name;
    public $age;
    public $created_at;

    //lợi dụng tính chất của hàm khởi tạo, là chạy đầu tiên
    //khi khởi tạo 1 đối tượng từ class để set cho thuộc tính
//    connection
    public function __construct() {
        $this->connection = $this->getConnection();
    }

    //lấy thông tin kết nối
    public function getConnection() {
        try {
            $connection = new PDO(Database::DB_DSN,
                Database::DB_USERNAME,
                Database::DB_PASSWORD);
        } catch (Exception $e) {
            die('Kết nối thất bại: ' . $e->getMessage());
        }
        return $connection;
    }

    //Lấy tất cả sinh viên từ bảng students
    public function getAll() {
        //viết câu truy vấn
        $sql_select_all = "SELECT * FROM students";
        //chuẩn bị đối tượng truy vấn
        //do biến connection đã được khởi tạo giá trị trong phương
//        thưcs khởi tạo r, nên chỉ việc sử dụng biến đó
        $obj_select_all = $this->connection
            ->prepare($sql_select_all);
        //thực thi truy vấn
        $obj_select_all->execute();
        $students = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $students;
    }

    //insert vào bảng students
    public function insert() {
        //tạo câu truy vấn insert
        $sql_insert = 'INSERT INTO students(`name`, `age`) 
        VALUES (:name, :age)';
        //chuẩn bị đối tượng insert
        $obj_insert = $this->connection->prepare($sql_insert);
        //tạo mảng để gán giá trị thật cho các placeholder của
        //câu truy vấn
        $arr_insert = [
          ':name' => $this->name,
          ':age' => $this->age
        ];
        //thực thi truy vấn, với truy vấn insert, update ,delete
        //thì luôn trả về true/false
        return $obj_insert->execute($arr_insert);
    }

    public function delete($id) {
        //tạo câu truy vấn
        $sql_delete = "DELETE FROM students WHERE `id` = $id";
        //cbi đối tượng xóa
        $obj_delete = $this->connection->prepare($sql_delete);
        //thực thi truy vấn
        return $obj_delete->execute();
    }

    //lấy ra chi tiết 1 sinh viên
    public function view($id) {
        //tạo câu truy vấn
        $sql_select_one = "SELECT * FROM students WHERE `id` = $id";
        //cbi đối tượng truy vấn
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $obj_select_one->execute();
        $student = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $student;
    }
}