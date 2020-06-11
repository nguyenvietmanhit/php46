<?php
//views/layouts/main.php
?>
<html>
    <head>
        <title>Title trang</title>
    </head>
    <body>
        <div class="header">HEADER</div>
        <div class="main">
<!--            hiển thị thông báo lỗi validate và session error-->
            <h3 style="color: red">
                <?php echo $this->error; ?>
                <?php
                //hiển thị session lỗi nếu có
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
                ?>
            </h3>
            <h3 style="color: green">
                <?php
                //hiển thị session thành công nếu có
                if (isset($_SESSION['success'])) {
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
                ?>
            </h3>

            <?php
            //hiển thị thuộc tính content của controller
            //chính là nội dung động tương ứng với từng view
            echo $this->content;
            ?>
        </div>
        <div class="footer">FOOTER</div>
    </body>

</html>
