<?php
//controllers/CategoryController
require_once 'controllers/Controller.php';
require_once 'models/Category.php';
class CategoryController extends Controller {

    //liệt kê danh mục
    public function index() {
        //gọi model để truy vấn lấy tất cả danh mục, sau đó
        //hiển thị ra view
        $category_model = new Category();
        $categories = $category_model->getAll();
        echo "<pre>";
        print_r($categories);
        echo "</pre>";
        //tạo ra mảng các biến để view có thể sử dụng
        $arr_output = [
            'categories' => $categories
        ];
        //lấy nội dung view tương ứng
        $this->content = $this
            ->render('views/categories/index.php', $arr_output);
        //gọi(nhúng file) layout để gắn nội dung view đó
        require_once 'views/layouts/main.php';
    }

    //Hiển thị và xử lý form thêm mới danh mục
    public function create() {
        //xử lý submit form
        if (isset($_POST['submit'])) {
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            //gán giá trị của form cho biến
            $name = $_POST['name'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            //xử lý validate:
            // - name ko đc để trống
            // - avatar upload lên phải có dạng ảnh,
            // và dung lượng ko quá 2Mb
            if (empty($name)) {
                $this->error = 'Name ko đc để trống';
            }
            //nếu có upload lên thì mới check validate
            elseif ($_FILES['avatar']['error'] == 0) {
                //phải có định dạng ảnh
                $extension =
            pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $extension_allowed = ['jpg', 'png', 'gif', 'jpeg'];
                //lấy dung lượng ảnh upload lên để kiểm tra
                $size_b = $_FILES['avatar']['size']; //Byte
                $size_mb = $size_b / 1024 / 1024; //Mb
                $size_mb = round($size_mb, 2); //lấy 2 số thập phân
                //1Mb = 1024Kb = 1024 * 1024 B
                if (!in_array($extension, $extension_allowed)) {
                    $this->error = 'Phai upload ảnh';
                } else if ($size_mb > 2) {
                    $this->error = 'Phải upload ảnh < 2Mb';
                }
            }

            //xử lý lưu dữ liệu vào bảng categories khi ko có lỗi
            //nào xảy ra
            if (empty($this->error)) {
                $avatar = '';
                //xử lý upload ảnh khi user upload ảnh
                if ($_FILES['avatar']['error'] == 0) {
                    //tạo 1 thư mục với cấu trúc assets/uploads
                    //hằng __DIR__ trả về đường dẫn tuyệt đối/vật lý
                    //của thư mục gần nhất đang chứa file hiện tại
                    //DIR -> controlers
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    //tạo ra tên file ko trùng lặp, vì sẽ có trường hợp
                    //upload các file trùng tên -> mất file cũ
                    $avatar = time() . '-' . $_FILES['avatar']['name'];
                    //gọi hàm để chuyển file từ thư mục tạm sang thư mục
                    //upload
                    move_uploaded_file($_FILES['avatar']['tmp_name'],
                        $dir_uploads . '/' . $avatar);
                }
                //xử lý lưu vào CSDL
                //gọi model để lưu
                $category_model = new Category();
                //gán các giá trị từ form cho thuộc tính của category
                $category_model->name = $name;
                $category_model->avatar = $avatar;
                $category_model->description = $description;
                $category_model->status = $status;
                //gọi phương thức insert của model
                $is_insert = $category_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert thành công';
                } else {
                    $_SESSION['error'] = 'Insert thất bại';
                }
                header
                ('Location: index.php?controller=category&action=index');
                exit();
            }
        }

        //lấy nội dung view create
        $this->content =
            $this->render('views/categories/create.php');
        //gọi layout để hiển thị ra view này
        require_once 'views/layouts/main.php';
    }

    public function update() {
        //validate id phải tồn tại và phải là số
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID ko hơp lệ';
            //chuyến hướng
        }

        $id = $_GET['id'];
        //gọi model lấy ra thông tin danh mục tương ứng dựa theo id
        $category_model = new Category();
        $category = $category_model->getById($id);
        echo "<pre>";
        print_r($category);
        echo "</pre>";
        $arr_output = [
            'category' => $category
        ];
        //lấy nội dung view update, do view này cần hiển thị
        //thông tin category nên cần truyền mảng output ra view
        $this->content =
            $this->render('views/categories/update.php', $arr_output);
        //gọi layout để hiển thị nội dung view vừa lấy đc
        require_once 'views/layouts/main.php';
    }
}