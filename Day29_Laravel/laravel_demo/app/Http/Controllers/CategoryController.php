<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        echo "Đây là phương thức index của CategoryController";
    }

    //Laravel tự động lấy đc các tham số động trên url khi mà
    //định nghĩa ra các route tương ứng
    public function detail($title, $id) {
        echo "Title: $title, Id: $id";
    }
}
