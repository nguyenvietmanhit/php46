<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//khai báo tất cả các route trên hệ thống tại file này:
// routes/web.php
//khai báo url để hiển thị thông tin gì đó
Route::get('/show-trang-chu', function() {
   echo "Truy cập link show-trang-chu";
});
//khai báo url do controller vào action nào xử lý
//ý nghĩa của url sau: khi truy cập vào url: liet-ke-danh-muc
//thì sẽ gọi controller=CategoryController và action=index xử lý
Route::get('liet-ke-danh-muc', 'CategoryController@index');

//Class  Route hiện tại sẽ chỉ cần quan tâm đến 2 phương thức tĩnh
//chính là get và post, ngoài ra còn có các phương thức khác là
//:put, patch, delete
// phương thức get: thường dùng cho các url dùng để lấy dữ liệu
//(GET) ra
//phưng thức post: dùng cho các thay đổi liên quan đến CSDL, vd:
//insert, update, delete thì sẽ dùng post

//khai báo các route mà có tham số
//vd: khai báo 1 url có có tham số id là giá trị động
//hiểu tương đương 1 url dạng mvc thuần như sau:
//index.php?controller=..&action...&title=...&id=...
Route::get('chi-tiet/{title}/{id}', function ($title, $id) {
    echo "Title = $title, ID = $id";
});

Route::get('ct/{title}/{id}', 'CategoryController@detail');