<?php
//demo_php_ajax.php
//Cơ chế ajax trong PHP - là cơ chế ko đồng bộ, sử dụng kỹ thuật
//của Javascript, cơ chế này cho phép PHP thao tác với CSDL (CRUD)
//mà ko hề tải lại trang, tăng trải nghiệm về mặt người dùng, vì
//tốc trang sẽ nhanh hơn
//Ajax trong PHP thường sẽ sử dụng thư viện jQuery để viết, chứ
//ko dùng Javascript thuần
?>
<!--Tích hợp jquery vào hệ thống để gọi ajax-->
<script src="js/jquery-3.4.1.min.js"></script>
<a href="#" id="click-ajax">
    Click để lấy danh sách students
</a>
<!--khai báo 1 thẻ với nội dung rỗng, để đổ dữ liệu
sinh viên vào từ ajax trả về
-->
<div id="result" style="background: yellow"></div>
<script type="text/javascript">
    //gọi ajax với jquery
    var obj_ajax = {
        //url dùng để xử lý dữ liệu từ ajax gửi lên
        url: 'list_student.php',
        //phương thức truyền dữ liệu
        method: 'GET',
        //danh sách dữ liệu gửi lên
        //chỉ là demo do chức năng lấy ds sinh viên thì
        //ko cần tham số gì cả
        data: {
            'name' : 'Manh',
            'id' : 4
        },
        //là nơi đón kết quả trả về sau khi php xử lý xong,
        // và kết quả sẽ được lưu bởi tham số data của hàm
        success: function(data) {
            // console.log(data);
            //dùng jquery hiển thị data ra vị trí mong muốn
            $('#result').html(data);
        }
    }
    $('#click-ajax').click(function() {
        //gọi ajax sau khi click
        $.ajax(obj_ajax);
    });
</script>
