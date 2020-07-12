<?php
//controllers/PaymentController.php
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
class PaymentController extends Controller {
    public function index() {
        //xử lý submit form khi user click THanh toán
        //debug thông tin mảng $_POST
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        //nếu user click nút Thanh toán/submit form thì mới xử lý
        if (isset($_POST['submit'])) {
            //gán biến trung gian cho dễ thao tác
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $note = $_POST['note'];
            //phương thức thanh toán, = 0 -> thanh toán trực tuyến
            // = 1 thì thanh toán COD
            $method = $_POST['method'];
            //check validate: fullname, address, mobile ko đc
            //để trống
            if (empty($fullname) || empty($address) || empty($mobile)) {
                $this->error = 'Fullname, address, mobile ko đc để trống';
            }
            //chỉ xử lý logic submit form khi ko có lỗi xảy ra
            if (empty($this->error)) {
                //ko quan tâm đến phương thức thanh toán đang là Trực tuyến
                //hay COD, mà sẽ lưu đơn hàng luôn
                $order_model = new Order();
                $order_model->fullname = $fullname;
                $order_model->address = $address;
                //....
                //giả sử đã lưu đơn hàng thành công
                $is_insert = $order_model->insert();
                if ($is_insert) {
                    //dựa vào phương thức thanh toán để quyết định
                    //sẽ làm gì
                    //nếu là thanh toán trực tuyến
                    if ($method == 0) {
                        //chuyển hướng về trang tích hợp ngân lượng
                    }
                    //nếu là thanh toán COD
                    else {
                        //thực hiện gửi mail xác nhận đơn hàng
                        //chuyển hướng về trang cám ơn
                    }
                }
            }
        }


        //lấy nội dung view index tương ứng
        $this->content =
            $this->render('views/payments/index.php');
        //gọi layout để hiển thị nội dung view vừa lấy đc
        require_once 'views/layouts/main.php';
    }
}