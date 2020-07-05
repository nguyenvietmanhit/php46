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
        <?php
        foreach($categories AS $category):
            //xứ lý đổ lại dữ liệu ra phần Lọc theo category
            //để user biết đã tích vào checkbox nào sau khi Filter
            //dựa vào thuộc tính checked của checkbox/radio
            //với thẻ select option -> selected
            $checked = '';
            //nếu user đã submit form
        //kiểm tra nếu id của category hiện tại nằm trong mảng
        //$_POST[category] thì chắc chắn category hiện tại đang
        //dc checked
            if (isset($_POST['category'])) {
                if (in_array($category['id'], $_POST['category'])) {
                    $checked = 'checked';
                }
            }
        ?>
        <input type="checkbox" name="category[]" <?php echo $checked; ?>
               value="<?php echo $category['id']; ?>" />
            <?php echo $category['name']; ?>
            <br />
        <?php endforeach; ?>
            </div>

            <div class="form-group">
              <b>Khoảng giá</b> <br>
                <?php
                //xử lý đổ lại dữ liệu cho các checkbox liên quan đến
                //khoảng giá
                //do đây là dữ liệu tĩnh, nên việc check đổ lại dữ liệu
                //sẽ theo hướng: có bao nhiêu input checkbox thì sẽ tạo
                //bấy nhiêu biến checked tương ứng
                    $checked_price1 = '';
                    $checked_price2 = '';
                    $checked_price3 = '';
                    $checked_price4 = '';
                    //nếu user submit form Filter, thì xử lý để đổ lại dữ liệu
                    if (isset($_POST['price'])) {
                        if (in_array(1, $_POST['price'])) {
                            $checked_price1 = 'checked';
                        }
                        if (in_array(2, $_POST['price'])) {
                            $checked_price2 = 'checked';
                        }
                        if (in_array(3, $_POST['price'])) {
                            $checked_price3 = 'checked';
                        }
                        if (in_array(4, $_POST['price'])) {
                            $checked_price4 = 'checked';
                        }
                    }
                ?>
              <input type="checkbox" name="price[]"
                     value="1" <?php echo $checked_price1; ?> > Dưới 1tr <br>
              <input type="checkbox" name="price[]"
                     value="2" <?php echo $checked_price2; ?>> Từ 1 - 2tr
              <br>
              <input type="checkbox" name="price[]"
                     value="3" <?php echo $checked_price3; ?>> Từ 2 - 3tr
              <br>
              <input type="checkbox" name="price[]"
                     value="4" <?php echo $checked_price4; ?>> Trên 3tr
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