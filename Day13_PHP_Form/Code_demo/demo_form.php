<!--demo_form.php-->
<?php
//demo biến $_SERVER
//in ra đường dẫn gốc file
//echo $_SERVER['SCRIPT_NAME'];
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";
?>
<!--<form action="" method="post">-->
<!--    Name: <input type="text" name="username" />-->
<!--    <br />-->
<!--    Age: <input type="number" name="age" />-->
<!--    <br />-->
<!--    <input type="submit" name="submit" value="Save" />-->
<!--</form>-->
<?php
//khai báo các biến chứa thông tin lỗi và thông tin
//thành công
$error = '';
$result = '';
//thử debug xem khi chưa submit form
// và submit form r thì mảng $_POST
//có giá trị gì ko ?
echo "<pre>";
print_r($_POST);
echo "</pre>";
//nếu có hành động submit form thì mới xử lý
//tương đương với mảng $_POST['name-của-nut-submit']
//đã tồn tại
if (isset($_POST['submit'])) {
    //tạo biến và gán giá trị
    $username = $_POST['username'];
    $password = $_POST['password'];
    //VALIDATE dữ liệu
    //validate username và password ko đc để trống,
    // dùng hàm empty
    if (empty($username) || empty($password)) {
        $error = 'Username và password ko đc để trống';
    }
    //validate username phải có định dạng email
    else if (!filter_var($username,
        FILTER_VALIDATE_EMAIL)) {
        $error = 'Username phải có định dạng email';
    }
    //validate password có độ dài >= 6 ký tự
    else if (strlen($password) < 6) {
        $error = 'Password cần >= 6 ký tự';
    }

    //xử lý submit form sau khi validate
    // dữ liệu thành công
    //tương đương biến $error đang rỗng
    if (empty($error)) {
        if ($username == 'nguyenvietmanhit@gmail.com'
            && $password == 123456) {
            $result = 'Đăng nhập thành công';
        } else {
            $error = 'Sai username hoặc password';
        }
    }

}
?>
<!-- Hiển thị thông báo lỗi và thông báo
thành công ra màn hình để user thấy
 -->
<h3 style="color: red;">
    <?php echo $error; ?>
</h3>
<h3 style="color: green;">
    <?php echo $result; ?>
</h3>
<form action="" method="post">
    Username:
    <input type="text" name="username" value="" />
    <br />
    Password:
    <input type="password" name="password" />
    <br />
    <input type="submit" name="submit" value="Login" />
</form>