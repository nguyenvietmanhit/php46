<?php
//resource/views/layouts/main.blade.php
//File layout của ứng dụng
?>
<!DOCTYPE html>
<html>
    <head>
        {{--Laravel sử dụng 1 biến dạng tham số để thể hiện cho
        các giá trị động--}}
        {{--Do title của mỗi trang sẽ khác nhau nên cần đặt
        giá trị này là 1 tham số gì đó, sử dụng cú pháp:
        @yield('<tên-biến-bạn-đặt>') --}}
        <title>@yield('title')</title>
        {{--nhúng các file .css, .js--}}
    </head>
    <body>
        {{--Hiển thị các lỗi valiate form tại file layout này--}}
        {{--Laravel đã tự sinh ra 1 biến có tên = $errors, chứa
        tất các thông tin liên quan đến lỗi validate, việc của bạn
        chỉ là kiểm tra nếu biến này có giá trị thì hiển thị ra--}}
        <?php
//            echo "<pre>";
//            print_r($errors->all());
//            echo "</pre>";
        ?>
<!--      Nếu như biến $errors có giá trị thì mới show ra  -->
        @if($errors->any())
            {{--gọi phương thức all để trả về 1 mảng các lỗi--}}
            @foreach($errors->all() AS $error)
                <h3 style="color: red">
                    {{--Cú pháp echo của Laravel sẽ chống đc
                    lỗi bảo mật XSS--}}
                    {{ $error }}
                </h3>
            @endforeach
        @endif
        <div id="header">HEADER</div>
        <div id="main-content">
            {{--Khai báo biến động tương đương với nội dung
            động của từng view, tương đương với echo $this-content
            của mô hình MVC--}}
            @yield('content')
        </div>
        <div id="footer">FOOTER</div>
    </body>
</html>
