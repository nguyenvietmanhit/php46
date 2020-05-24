<?php
//demo_form_upload.php
//khi form có chức năng upload file, thì form
//bắt buộc phải có 2 tính chất sau
//- Form phải có phương thức là POST
//- Phải thêm thuộc tính sau cho thẻ form:
//enctype="multipart/form-data"
?>


<?php
//xử lý submit form
$error = '';
$result = '';
echo "<pre>";
print_r($_POST);
echo "</pre>";
//PHP có sẵn 1 biến mảng 2 chiều $_FILES, chứa
//toàn bộ thông tin liên quan đến file upload
//thông qua thuộc tính name của input đó
//biến $_FILES có 1 số thông tin sau
// - name: tên của file upload
// - type: định dạng file upload, tuy nhiên
//thường sẽ sử dụng hàm khác để lấy ra đuôi file
// - tmp_name: đường dẫn tạm mà PHP đã upload tạm
//cho file của bạn
// - error: mã lỗi, chỉ cần quan tâm nếu = 0 thì upload
//vào thư mục tạm thành công, và ngược lại
// - size: kích thước file upload, đơn vị Byte - B
//1Mb = 1024Kb, 1Kb = 1024B;
// Để di chuyển file từ thư mục tạm mà PHP đã để tạm,
//vào thư mục mà bạn mong muốn, thì cần sử dụng hàm
//move_uploaded_file($tmp_name, $destination);
echo "<pre>";
print_r($_FILES);
echo "</pre>";
//nếu có hành động submit form thì mới xử lý
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $files_arr = $_FILES['upload'];
    //có 1 số điều kiện validate
    //- Username ko đc để trống
    //- File upload nếu upload lên phải có định dạng
//    ảnh jpg, jpeg, png, gif
//    và dung lương ko đc vượt quá 2Mb
    if (empty($username)) {
        $error = 'Username ko đc để trống';
    }
    //nếu như user có hành động upload file
    //thì tương đương key error = 0
    else if ($files_arr['error'] == 0) {
        //- kiểm tra file upload phải là ảnh
//        lấy ra đuôi file
        $extension = pathinfo($files_arr['name'],
            PATHINFO_EXTENSION);
        //chuyển thành ký tự thường để phòng trường hợp
        //đuôi file đang ở dạng ký tự hoa
        $extension = strtolower($extension);
        //tạo 1 mang chứa các giá trị đuôi file ảnh hợp lệ
        $arr_extension = ['jpg', 'jpeg', 'gif', 'png'];
        if (!in_array($extension, $arr_extension)) {
            $error = 'Phải upload file dạng ảnh';
        }
        //check trường hợp upload file dung lượng > 2Mb
//        sẽ báo lỗi
        $size = $files_arr['size']; //đơn vị đang là Byte
        //chuyển đổi dung lượng từ B -> Mb
        //1Mb = 1024Kb = 1024 * 1024 B
        $size = $size / (1024 * 1024);
        //làm tròn size lên cho dễ nhìn
//        ceil 1.5 -> 2
//        floor 1. 5 -> 1
//        round: làm tròn theo đơn vị là số thập phân
        $size = round($size, 2);
        //sử dụng giá trị 0.01 để test Mb, vì trên máy
//        có thể sẽ ko file nào mà đang > 2Mb
        if ($size > 2) {
            $error = 'File upload ko đc lớn hơn 2Mb';
        }
    }

    //xử lý submit form
    if (empty($error)) {
        //xử lý upload file chỉ khi user có hành động
//        upload, dựa vào key error của mảng $_FILES
        if ($files_arr['error'] == 0) {
            //khai báo thư mục mong muốn để upload file
            //đường dẫn của thư mục này phải là
//            đường dẫn tuyệt đối/vật lý
            //giả sử thư mục chứa file upload lên có
//            tên là uploads, và thư mục này sẽ ngang
//            hàng với file demo_form_upload.php
            //cần tạo bằng code
            //__DIR__ -> đường dẫn vật lý tới
//            thư mục Codes_demo_tren_lop
            print_r(__DIR__);
            $dir_uploads = __DIR__ . '/uploads';
            //kiểm tra nếu đường dẫn thư mục ko tồn tại
            //thì sẽ tạo mới
            if (!file_exists($dir_uploads)) {
                //hàm tạo mới thư mục
                //dựa vào đường dẫn vật lý
//                make directory
                mkdir($dir_uploads);
            }
            //chuyển file mà PHP đang lưu tạm thông qua
//            mảng $_FILES vào thư mục bạn vừa tạo
            //tuy nhiên cần xử lý để tạo ra các tên file
//            ko trùng lặp
            $filename = time() . '-' . $files_arr['name'];
            $destination = $dir_uploads . '/' . $filename;
            $is_upload =
                move_uploaded_file($files_arr['tmp_name'],
                $destination);
            if ($is_upload) {
                $result .=
            "<img src='uploads/$filename' height='80px' />";
                $size = round($files_arr['size']/1024/1024,
                    2);
                $result .= "<br />";
                $result .= "Dung lượng ảnh: $size Mb";
                $result .= "<br />";
                $result .= "Tên file ảnh: $filename";
            }

        }
        //Hiển thị ra tên username và các thông tin
//        liên quan đến ảnh vừa upload
        $result .= "Username: $username <br />";
    }
}
?>
<h3 style="color: green">
    <?php echo $result; ?>
</h3>
<h3 style="color: red">
    <?php echo $error; ?>
</h3>
<form action="" method="post"
      enctype="multipart/form-data">
    Username: <input type="text"
                     name="username" value="" />
    <br />
<!--  với input type=file thì
 sẽ ko có thuộc tính value  -->
    Upload file:
    <input type="file" name="upload" />
    <br />
    <input type="submit" name="submit" value="Save" />
</form>
