<?php

//controllers/StudentController.php
class StudentController
{
  //thuộc tính lưu thông tin động của từng view
  //trong file layout sẽ hiển thị ra thuộc tính này
  public $content;

  //phương thức render có tác dụng lấy nội dung tương ứng/
  //để gắn vào layout tương ứng
  //có 2 tham số
  //$file: đường dẫn tới file view tương ứng
  //$variables: các biến mà sử dụng trong file view trên
  public function render($file, $variables = [])
  {
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


  public function index()
  {
    //gán nội dung cho thuộc tính content
    //tất cả đường dẫn file khi nhúng đều phải đứng từ file
//        index.php gốc của ứng dụng
    $students = [
        'name' => 'Manh'
    ];
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
}