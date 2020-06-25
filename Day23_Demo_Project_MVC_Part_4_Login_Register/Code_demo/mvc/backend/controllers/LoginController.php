<?php
//controllers/LoginController.php
//xử lý đăng ký, đăng nhập cho user
require_once 'controllers/Controller.php';
require_once 'models/User.php';
class LoginController extends Controller {

    //xử lý đăng ký user
    public function signup() {
        //xử lý submit form
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        if (isset($_POST['submit'])) {
            //tạo biến và gán các giá trị từ form cho biến
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            //validate form,
            // - ko đc để trống username và password
            // - trường password và password confirm phải giống nhau
            if (empty($username) || empty($password)) {
                $this->error = 'Username hoặc password ko đc để trống';
            } else if ($password != $confirm_password) {
                $this->error = 'Password confirm chưa đúng';
            }
            //xử lý đăng ký user trong trường hợp ko có lỗi validate
            if (empty($this->error)) {
                //cần kiểm tra trường hợp username đã tồn tại
                //trong csdl thì báo lỗi
                $user_model = new User();
                //lấy thông tin user dựa vào username
                $user = $user_model->getUser($username);
                //trường hợp username đã tồn tại
                if (!empty($user)) {
                    $this->error = 'Username đã trùng trong CSDL';
                } else {
                    //gán các giá trị cho thuộc tính tương ứng
                    //của model
                    $user_model->username = $username;
                    //ko bao giờ đc lưu password kiểu plain text
                    //bắt buộc phải mã hóa password trước khi lưu
                    //có rất nhiều cơ chế mã hóa, với mục đích demo
                    //thì sẽ sử dụng cơ chế mã hóa md5 cho đơn giản
//                    $user_model->password = $password;
                    $user_model->password = md5($password);
                    $is_register = $user_model->register();
                    var_dump($is_register);
                }
            }
        }

        //lấy nội dung view tương ứng
        $this->content =
            $this->render('views/users/signup.php');
        //gọi layout tương ứng
        require_once 'views/layouts/main_login.php';
    }
}