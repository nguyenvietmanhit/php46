<?php
//controllers/CartController.php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

//xử lý thêm/sửa/xóa/liệt kê giỏ hàng
class CartController extends Controller {

    //xử lý thêm sản phẩm vào giỏ hàng
    public function add() {
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
        //Giỏ hàng kiểu như giỏ đi chợ, lưu các thông tin sản phẩm
        //mà user chọn
        //tùy mục đích mà có thể lưu giỏ hàng trong CSDL, dùng cookie,
        //dùng session ...
        //Thông thường sẽ dùng session để lưu giỏ hàng,
        //về mặt lập trình, cần xác định trước cấu trúc giỏ hàng sẽ lưu
        //đây là bước quan trọng nhất
        //Sẽ xây dựng 1 cấu trúc giỏ hàng như sau, để có thể thao tác
        //đơn giản nhất, ví du mảng giỏ hàng:
//        $carts = [
//            1 => [
//                'name' => 'Samsung Note 9',
//                'price' => 12000,
//                'avatar' => 'dien-thoai.jpg',
//                'quality' => 4
//            ],
//            5 => [
//                'name' => 'Samsung Note 111',
//                'price' => 1200011,
//                'avatar' => 'dien-thoai111.jpg',
//                'quality' => 411
//            ]
//        ];

        //Xử lý logic thêm vào giỏ hàng
        //lấy ra thông tin sản phẩm dựa vào id bắt được từ url
        //do dùng rewrite đã bắt vaidate id r nên ko cần
        //bắt lại bằng code
        $id = $_GET['id'];
        $product_model = new Product();
        $product = $product_model->getById($id);
        echo "<pre>";
        print_r($product);
        echo "</pre>";
        //tạo 1 mảng chứa các thông tin cần thiết để thêm vào giỏ
        $cart = [
          'name' => $product['title'],
          'price' => $product['price'],
          'avatar' => $product['avatar'],
            //mặc định mỗi lần thêm chỉ thêm 1 sản phẩm
          'quality' => 1
        ];

        //1 - nếu tại thời điểm thêm sản phẩm vào giỏ hàng
        //mà giỏ hàng chưa từng tồn tại, thì tạo mới giỏ hàng
        //và thêm sản phẩm hiện tại vào giỏ hàng
//        2 - Nếu giỏ hàng đã tồn tại rồi, thì lại có 2 trường sau:
//        + sp chưa tồn tại trong giỏ hàng -> thêm mới (giống bước 1)
//        + nếu sp tồn tại trong giỏ hảng r -> tăng số lượng lên 1
        //đặt tên giỏ hàng = cart
        if (!isset($_SESSION['cart'])) {
            //khởi tạo giỏ hàng và thêm mới sản phẩm vào giỏ
            //cấu trúc các phần tử của giỏ hàng:
            // key chính là id của sản phẩm
            //value chính là mảng các thông tin của sản phẩm đó
            $_SESSION['cart'][$id] = $cart;
        } else {
            //nếu sp thêm vào chưa tồn tại trong giỏ hàng, thì
            //thực hiện thêm mới
            //tương đương id của sp khi thêm ko tồn tại trong
            // danh sách các key của giỏ hàng
            if (!array_key_exists($id, $_SESSION['cart'])) {
                $_SESSION['cart'][$id] = $cart;
            } else {
                //trường hợp id sp đã tồn tại trong danh sách các
                //key của mảng giỏ hàng, thì chỉ cập nhật số lương
                //cho phần tử đó trong giỏ hàng
                $_SESSION['cart'][$id]['quality']++;
            }

        }
//        echo "<pre>";
////        print_r($_SESSION);
////        echo "</pre>";
/// chuyển hướng về trang giỏ hàng của bạn
/// chú ý: khi chuyển hướng với url đã đc rewrite, thì cần
/// //sử dụng cách sau để set lại url gốc cho trang
    $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban';
        header("Location: $url_redirect");
        exit();
    }

    //liệt kê giỏ hàng
    public function index() {
        //xử lý submit form, cập nhật lại giỏ hàng
        //debug thông tin mảng $_POST để xem dữ liệu gửi từ form
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        //nếu user submit form, click nút Cập nhật giỏ hàng
        if (isset($_POST['submit'])) {
            //lặp giỏ hàng, và gán số lượng tương ứng với sản phẩm
            //trong giỏ hàng đc gửi từ form lên cho giỏ hàng tương
            //ưng
            foreach($_SESSION['cart'] AS $product_id => $cart) {
                $_SESSION['cart'][$product_id]['quality']
                    = $_POST[$product_id];
            }
            $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
        }


        $this->content =
            $this->render('views/carts/index.php');
        require_once 'views/layouts/main.php';
    }

    public function delete() {
        //do đã dùng rewrite url để validate id r, nên ko cần code
        //validate nữa
        $product_id = $_GET['id'];
        //xóa phần tử của giỏ hàng với key chính là id của sản
        //phẩm vừa bắt đc từ url
        unset($_SESSION['cart'][$product_id]);
        //nếu như xóa hết toàn bộ sản phẩm trong giỏ hàng
        //thì sẽ xóa luôn giỏ hàng đó
        if (empty($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
        $_SESSION['success'] = 'Xóa sản phẩm khỏi giỏ hàng thành công';
        //chuyển hướng về trang giỏ hàng của bạn
        //khi chuyển hướng về link url dạng rewrite, thì cần lấy
        //đc url gốc của ứng dụng, $_SERVER['SCRIPT_NAME']
        $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban';
        header("Location: $url_redirect");
        exit();
    }
}