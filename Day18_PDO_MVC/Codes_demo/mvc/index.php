<?php
session_start();
//mvc/index.php
//File index gốc của ứng dụng, có tác dụng phân tích
//url từ user để gọi đúng controller và action tương ứng
//Ví dụ: user muốn truy cập trang liệt kê sinh viên
//thì dev cần phải biết là chức năng liệt kê sinh viên
//này là do class controller nào và phương thức tương ứng
//nào đang xử lý
//do mô hình mvc là do chính bạn tự xây dựng cấu trúc,
//nên việc quy định url trên hệ thống của bạn bắt buộc
//phải tự đưa ra 1 chuẩn cho url
//url theo mô hình mvc hiện tại sẽ có kiểu như sau:
//url sau tương ứng với chức năng liệt kê sinh viên
//index.php?controller=student&action=index
//khởi tạo session và set múi giờ chuẩn
date_default_timezone_set('Asia/Ho_Chi_Minh');

//phân tích url để lấy ra controller và action
//index.php?controller=student&action=index
//lấy ra giá trị của controller từ url
//nếu có truyền tham số controller thì gán bằng $_GEt tương ứng,
//còn nếu ko truyền thì mặc định là StudentController
$controller = isset($_GET['controller']) ? $_GET['controller'] :
    'student';
//student
//lấy giá trị của action (tên phương thức của class) từ url
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

//thực hiện chuyển đổi controller thành tên class controller đã tạo
//StudentController
$controller = ucfirst($controller); //Student
$controller .= "Controller"; //StudentController

//chuyển đổi tiếp thành đúng tên file, gắn thêm chuỗi .php
//mục đích để nhúng file controller đó vào
$path_controller = "controllers/$controller.php";
//controllers/StudentController.php

//kiểm tra nếu đường dẫn trên ko tồn tại, thì sẽ báo Not found
if (!file_exists($path_controller)) {
    die('Trang bạn tìm ko tồn tại');
}

//gọi file controller vào
require_once "$path_controller";

//sau khi nhúng đc class controller, thì sẽ tiến hành khởi tạo
//đối tượng từ class, vào gọi phương thức tương ứng
$object = new $controller();

//cần check nếu như action ko tồn tại thì báo lỗi
if (!method_exists($object, $action)) {
    die("Ko tồn tại phương thức $action trong class $controller");
}
//truy cập phương thức
$object->$action();
//do đang là mô hình mvc, nên tất cả url trên hệ thống
//đều phải chạy từ file index.php gốc của ứng dụng

?>