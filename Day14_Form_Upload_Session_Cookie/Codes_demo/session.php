<?php
session_start();
//để có thể sử dụng được biến $_SESSION thì bắt buộc
//phải khai báo hàm sau
//hàm này phải được khai báo trên đầu file
//session.php
//session trong php đc lưu trong biến mảng $_SESSION
//1 - Thêm dữ liệu cho session
$_SESSION['name'] = 'Mạnh';
$_SESSION['age'] = 30;
$_SESSION['arr'] = [
    'name' => 'PHP46',
    'address' => 'Hà Nội'
];
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//2 - Hiển thị dữ liệu session
echo $_SESSION['name']; //Mạnh
echo $_SESSION['age']; //30
print_r($_SESSION['arr']); //

//3 - Xóa session, nên dùng hàm unset để xóa các phần
//tử cụ thể của session
unset($_SESSION['name']);
//xóa tất cả session đang có trên hệ thống
session_destroy();