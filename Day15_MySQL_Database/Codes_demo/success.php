<?php
session_start();
//success.php
//kiểm tra nếu ko tồn tại session username,
//thì ko cho truy cập trang này
if (!isset($_SESSION['username'])) {
    header('Location: demo_cookie.php');
    exit();
}

echo $_SESSION['success'];

$username = $_SESSION['username'];
echo "Chào mừng, $username";