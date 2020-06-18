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

        //lấy nội dung view create
        $this->content =
            $this->render('views/categories/create.php');
        //gọi layout để hiển thị ra view này
        require_once 'views/layouts/main.php';
    }
}