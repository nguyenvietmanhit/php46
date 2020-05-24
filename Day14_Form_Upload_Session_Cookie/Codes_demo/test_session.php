<?php
session_start();
//test_session.php
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//lưu ý, khi thao tác với session vẫn luôn phải
//kiểm tra xem đã tồn tại biến session đó hay chưa
//echo $_SESSION['name'];
echo isset($_SESSION['name']) ? $_SESSION['name'] : '';