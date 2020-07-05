<?php
//controllers/ProductController.php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
class ProductController extends Controller {
    //Hiển thị chi tiết sản phẩm
    public function detail() {
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
        //ko cần validate id vì khi rewrite url đã bắt case này r
        $id = $_GET['id'];
        //gọi model để lấy product tương ứng dựa vào id vừa lấy đc
        $product_model = new Product();
        $product = $product_model->getById($id);
        echo "<pre>";
        print_r($product);
        echo "</pre>";
        //lấy nội dung view chi tiết tương ứng
        $this->content =
            $this->render('views/products/detail.php', [
                'product' => $product
            ]);
        //gọi layout để hiển thị ra nội dung view
        require_once 'views/layouts/main.php';
    }

    public function showAll() {
        //xử lý submit form - khi filter sản phẩm
        //debug thông tin form
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        die;
        if(isset($_POST['filter'])) {
            //xử lý lọc sản phẩm
        }

        //lấy ra danh sách categories để hiển thị ra phần lọc
        //danh mục
        $category_model = new Category();
        $categories = $category_model->getAll();
        //lấy ra tất cả sản phẩm trên hệ thống
        $product_model = new Product();
        $products = $product_model->getAll();

        $this->content =
        $this->render('views/products/show_all.php', [
            'categories' => $categories,
            'products' => $products
         ]);
        require_once 'views/layouts/main.php';
    }
}