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

//routes/web.php
//Laravel quy định chặt chẽ việc dùng phương thức nào khi set route,
//dùng phương thức get khi lấy dữ liệu ra, post khi có thay đổi dữ
//liệu trong database
//Khai báo các route cho chức năng CRUD product
// + Route trang liệt kê sản phẩm
Route::get('/product/list', 'ProductController@index');

// + Route hiển thị ra form sản phẩm
Route::get('/product/create', 'ProductController@create');
// + Route save dữ liệu khi submit form thêm mới
Route::post('/product/store', 'ProductController@store');

// + route update sản phẩm, cần truyền tham số id lên trình duyệt
//để biết đc đang update trên sản phẩm nào
//route này chỉ hiển thị ra form update
Route::get('/product/update/{id}', 'ProductController@update');
// + route cập nhật dữ liệu khi submit form
Route::post('/product/edit', 'ProductController@edit');

// + route xóa sản phẩm
Route::get('/product/delete/{id}', 'ProductController@delete');