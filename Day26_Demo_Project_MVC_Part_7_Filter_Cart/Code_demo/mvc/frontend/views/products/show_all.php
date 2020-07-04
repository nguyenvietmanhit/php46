<main class="container">
  <div class="product-main">
    <div class="container">
      <div class="row">
        <div class="main-left col-md-3 col-sm-3 col-xs-12">
          <h3>Lọc</h3>
          <form action="" method="POST">
            <div class="form-group">
              <b>Danh mục</b> <br>
<!--           đổ dữ liệu động có được từ biến $categories
   truyền từ controller sang
   .Với các input mà cho phép chọn nhiều giá trị 1 thời điểm
   như checkbox, select ở dạng multiple, file ở dạng multiple
   thì cần khai báo thuộc tính name ở dạng mảng
   -->
        <?php foreach($categories AS $category): ?>
            <input type="checkbox" name="category[]"
               value="<?php echo $category['id']; ?>" />
            <?php echo $category['name']; ?>
            <br />
        <?php endforeach; ?>
            </div>

            <div class="form-group">
              <b>Khoảng giá</b> <br>
              <input type="checkbox" name="price[]" value="1"> Dưới 1tr <br>
              <input type="checkbox" name="price[]" value="2"> Từ 1 - 2tr
              <br>
              <input type="checkbox" name="price[]" value="3"> Từ 2 - 3tr
              <br>
              <input type="checkbox" name="price[]" value="4"> Trên 3tr
              <br>
            </div>
            <div class="form-group">
              <input type="submit" name="filter" value="Filter" class="btn btn-primary">
              <a href="danh-sach-san-pham" class="btn btn-default">Xóa filter</a>
            </div>
          </form>
        </div>
        <div class="main-right col-md-9 col-sm-9 col-xs-12">
          <h2>Danh sách sản phẩm</h2>
          <div class="row">
              <?php
              require_once 'helpers/Helper.php';
              foreach($products AS $product):
                $slug = Helper::getSlug($product['title']);
              //url phải ở dạng rewrite
                $product_link = "chi-tiet-san-pham/$slug/" . $product['id'];
              ?>
            <div class="product-item col-md-4 col-sm-4 col-xs-12">
              <a href="<?php echo $product_link; ?>" class="product-link">
                <img src="../backend/assets/uploads/<?php echo $product['avatar']?>"
                     height="150" class="product-image">
              </a>
              <div class="home-page">
                <a href="#" class="timeline-category-name font-arial">
                    <?php echo $product['category_name']; ?>
                </a>
                <a href="<?php echo $product_link; ?>" class="product-link">
                  <h3 class="timeline-post-title">
                      <?php echo $product['title']; ?>
                  </h3>
                </a>
                <div class="product-price timeline-post-info">
                  <?php echo number_format($product['price']); ?>đ
                </div>
                <div class="timeline-post-info">
                  <a href="them-vao-gio-hang/<?php echo $product['id']; ?>"
                     class="product-cart">
                    Thêm vào giỏ hàng
                  </a>
                </div>
              </div>
            </div>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>