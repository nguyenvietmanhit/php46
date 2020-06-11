<?php
require_once 'models/Student.php';
//controllers/StudentController.php
class StudentController {
    //thuộc tính lưu thông tin động của từng view
    //trong file layout sẽ hiển thị ra thuộc tính này
    public $content;

    //chứa thông tin lỗi liên quan đến validate form
    public $error;

    //phương thức render có tác dụng lấy nội dung tương ứng/
    //để gắn vào layout tương ứng
    //có 2 tham số
    //$file: đường dẫn tới file view tương ứng
    //$variables: các biến mà sử dụng trong file view trên
    public function render($file, $variables = []) {
        //giải nén biến $variables để $file có thể sử dụng
        extract($variables);
        //bắt đầu tạo ra 1 vùng nhớ tạm để ghi nhớ việc lưu
//        thông tin view của $file
        ob_start();
        //nhúng đường file $file vào để phục vụ cho quá trình
        //lưu bên trên
        require_once "$file";
        //kết thúc việc lưu thông tin file
        $render_view = ob_get_clean();

        return $render_view;
    }


    //hiển thị danh sách sinh viên trong bảng students
    public function index() {
        $student_model = new Student();
        //gọi model để lấy dữ liệu từ db, theo đúng tính
//        chất của mô hình MVC
        $students = $student_model->getAll();
        //gán nội dung cho thuộc tính content
        //tất cả đường dẫn file khi nhúng đều phải đứng từ file
//        index.php gốc của ứng dụng
        $this->content =
            $this->render('views/students/index.php', [
                'students' => $students
            ]);
        //gọi layout tương ứng,
        //trong file layout đã có phần hiên thị $this->content
        require_once 'views/layouts/main.php';
//        echo "Đây là phương thức index của
//         class StudentController";
    }

    //Thêm mới sinh viên
    public function create() {
        //xử lý submit form khi user click nút Submit
        if (isset($_POST['submit'])) {
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            //lấy giá trị từ form
            $name = $_POST['name'];
            $age = $_POST['age'];
            //xử lý validate form, trường hợp name ko đc để trống
            if (empty($name)) {
                $this->error = 'Name ko đc để trống';
            }
            //xử lý lưu dữ liệu chỉ khi nào ko có lỗi
            if (empty($this->error)) {
                $student_model = new Student();
                //gán giá trị form cho các thuộc tính của
                // class Student
                $student_model->name = $name;
                $student_model->age = $age;
                $is_insert = $student_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Thêm thành công';
                } else {
                    $_SESSION['error'] = 'Thêm thất bại';
                }
                //chuyển hướng về trang danh sách
                header("Location: index.php?controller=student&action=index");
                exit();
            }
        }

       //chưa cần quan tâm logic xử lý, cứ hiển thị ra view trc
        //lấy nội dung view create
        $this->content =
            $this->render('views/students/create.php');
        //gọi layoute để hiển thị nội dung view create vừa lấy đc
        require_once 'views/layouts/main.php';
    }

    //xóa student theo id
    public function delete() {
        //validate nếu id ko tồn tại hoặc id ko phải số thì báo lỗi
        //và chuyển hướng về trang danh sách
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'Id ko hợp lệ';
            header
            ("Location: index.php?controller=student&action=index");
            exit();
        }
        $id = $_GET['id'];
        $student_model = new Student();
        $is_delete = $student_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = "Xóa bản ghi $id thành công";
        } else {
            $_SESSION['error'] = "Xóa bản ghi $id thất bại";
        }
        header
        ("Location: index.php?controller=student&action=index");
        exit();
    }

    //hiển thị chi tiết 1 sinh viên
    public function view() {
        //validate nếu id ko tồn tại hoặc id ko phải số thì báo lỗi
        //và chuyển hướng về trang danh sách
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'Id ko hợp lệ';
            header
            ("Location: index.php?controller=student&action=index");
            exit();
        }

        $id = $_GET['id'];
        $student_model = new Student();
        $student = $student_model->view($id);
        echo "<pre>";
        print_r($student);
        echo "</pre>";

        //lấy nội dung view và hiển thị ra layout
//        $this->content = $this->render('')
    }
}