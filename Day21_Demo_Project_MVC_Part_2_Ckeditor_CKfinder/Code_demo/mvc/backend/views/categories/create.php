<?php
//views/categories/create.php
//form sẽ có 4 input: name, avatar, description, status
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" name="name"
               value="" class="form-control" />
    </div>
    <div class="form-group">
        <label for="avatar">Upload ảnh</label>
        <input type="file" id="avatar" name="avatar"
        class="form-control"
        />
    </div>
<!--  tích hợp CKEditor cho description
  , ckeditor chỉ làm việc đc với thẻ <textarea>, và sử dụng
  thuộc tính name của textarea để cấu hình
  1 - COpy thư mục ckeditor vào hệ thống, /assets/ckeditor
  2 - Nhúng file ckeditor/ckeditor.js vào layout
  3 - Code JS để cấu hình
  4 - Tích hợp ckfinder để tạo ra nút Upload file cho Ckeditor
  , làm theo hướng dẫn trong slide tương ứng để config
  -->
    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
<!--   for của <label> luôn đi kèm với id của input để
     tăng sự tiện dụng cho user
     -->
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
            <option value="0">Disabled</option>
            <option value="1">Active</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Create"
        class="btn btn-success" />
    </div>
</form>
