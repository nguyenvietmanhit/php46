<?php
session_start(); //khi sử dụng biến $_SESSION luôn
//cần dùng hàm này
//demo_cookie.php


//Khởi tạo cookie, thời gian sống tính bằng giây, tính
//từ thời điểm hiện tại
setcookie('username',
    'nvmanh', time() + 5);

//lấy giá trị thì tương đương với lấy giá trị của mảng
//theo key
echo isset($_COOKIE['username'])
    ? $_COOKIE['username'] : 'ko tồn tại cookie username';
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
//xóa cookie
//ko dùng hàm unset, set lại thời gian sống cho cookie
//đó là giá trị âm, sử dụng hàm time() trừ 1
setcookie('username',
    'abc', time() - 12);

//demo chức năng login đơn giản sử dụng session
?>
<?php
$error = '';
$result = '';
echo "<pre>";
print_r($_POST);
echo "</pre>";
//nếu user submit form
if (isset($_POST['login'])) {
    //gán giá trị
    $username = $_POST['username'];
    $password = $_POST['password'];
    //check validate: ko đc để trống các trường
    if (empty($username) || empty($password)) {
        $error = 'Ko đc để trống các trường';
    }
    //nếu như ko có lỗi thì thực hiện xử lý submit
    if (empty($error)) {
        //xử lý đăng nhập
        //nếu username=nvmanh và password = 123456
        //thì báo login thành công ở 1 trang khác,
//        và hiển thị ra tên username đó
        if ($username == 'nvmanh' && $password == 123456) {
//            $result = 'Login thành công';
            $_SESSION['success'] = 'Login thành công';
            $_SESSION['username'] = $username;
            //hàm chuyển hướng sang url khác
            //http://a.php
            header('Location: success.php');
            //kết thúc chuyển hướng luôn dùng hàm exit
            exit();
        } else {
            $error = 'Sai tài khoản hoặc mật khẩu';
        }
    }
}
echo "<b>$error</b>";
?>
<form action="" method="POST">
    Username: <input type="text"
                     name="username" value="" />
    <br />
    Password:
        <input type="password" name="password" />
    <br />
    <input type="submit" name="login" value="Login" />
</form>
