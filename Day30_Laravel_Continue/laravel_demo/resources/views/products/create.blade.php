<?php
//resources/views/products/create.blade.php
//echo "View thêm mới";
?>
{{--File .blade của PHP là 1 template engine - giúp việc code PHP--}}
{{--trở nên dễ đọc hơn bằng các cú pháp riêng của nó--}}
{{--{{ 'Hello world' }}--}}
{{--@if(5 > 0)--}}
    {{--<h1>5 > 0</h1>--}}
{{--@else--}}
    {{--<h1>5 <= 0</h1>--}}
{{--@endif--}}
{{--Demo về layout trong Laravel--}}
{{--Tạo 1 cấu trúc thư mục layout như sau:--}}
{{--resources/views/layouts/main.blade.php  --}}

{{--Gọi layouts (kế thừa layout) main từ thư mục template
, sử dụng cú pháp: @extends('đường dẫn tới file layout')--}}
@extends('layouts.main')
{{--Sau khi kế thừa layout, cần gán các giá trị thật cho các
@yield đã khai trong file layout, sử dụng cú pháp:
 @section('tên-yield', '<giá-trị-thật>')--}}
@section('title', 'Form thêm mới sản phẩm')
{{--Nếu nội dung nhiều thì sử dụng cú pháp @section ,
@endsection--}}
@section('content')
    {{--action chính là url tương ứng trong route--}}
    <form action="{{ url('/product/store') }}"
          method="post" enctype="multipart/form-data">
        {{--Form trong Laravel rất bảo mật, để chống lỗi bảo mật
        CSRF Token trong form, thì form trong Laravel bắt buộc
         phải khai báo 1 input ẩn để truyền giá trị token lên, nếu ko Laravel
        sẽ ko cho submit form--}}
        <input type="hidden" name="_token"
               value="{{ csrf_token() }}" />
        {{--Đổ lại dữ liệu trong Laravel ra các input, sử dụng hàm
        : old('name-input')--}}
        Nhập tên sản phẩm:
        <input type="text" name="name" value="{{ old('name') }}" />
        <br />
        Nhập giá sản phẩm:
        <input type="number" name="price" value="{{ old('price') }}" />
        <br />
        Chọn ảnh đại diện
        <input type="file" name="avatar" />
        <br />
        <input type="submit" name="submit" value="Save" />
    </form>
@endsection

