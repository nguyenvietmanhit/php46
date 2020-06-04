<?php
//oop_crud.php
//sử dụng OOP để viết chương trình quản lý sinh viên
//phân tích class Student để xem đối tượng sinh viên
//có thể cố các thuộc tình và phương thức gì
class Student {
    public $id;
    public $name;
    public $age;
    public $created_at;
    //thuộc tính thêm để lưu biến kết nối csdl
    public $connection;

    const DB_HOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'day16';
    const DB_PORT = 3306;

    public function __construct() {
        //tự động khởi tạo biến kết nối
        $this->connection = $this->getConnection();
    }

    /*
     * Kết nối csdl
     */
    public function getConnection() {
        $connection = mysqli_connect(self::DB_HOST,
            self::DB_USERNAME,
            self::DB_PASSWORD,
            self::DB_NAME, self::DB_PORT);
        if (!$connection) {
            die("Lỗi kết nối: " . mysqli_connect_error());
        }
        return $connection;
    }

    public function create() {

    }

    public function edit() {

    }

    public function delete() {

    }

    public function index() {
        //tạo câu truy vấn
        $sql_select = "SELECT * FROM students";
        //thực thi truy vấn
        $result_all = mysqli_query($this->connection, $sql_select);
        $students = [];
        if (mysqli_num_rows($result_all)) {
            $students = mysqli_fetch_all($result_all,
                MYSQLI_ASSOC);
        }
        echo "<pre>";
        print_r($students);
        echo "</pre>";
    }
}
//khởi tạo đối tượng từ class trên
$student = new Student();
$student->index();