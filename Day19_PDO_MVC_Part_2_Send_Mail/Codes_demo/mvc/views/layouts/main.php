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
            <?php
            //hiển thị thuộc tính content của controller
            //chính là nội dung động tương ứng với từng view
            echo $this->content;
            ?>
        </div>
        <div class="footer">FOOTER</div>
    </body>

</html>
