<?php
//nhúng class Helper để gọi phương thức lấy slug của chi tiết sp
require_once 'helpers/Helper.php';
?>
<!--views/homes/index.php-->
<section class="main-content">
    <!--MAIN LEFT-->
    <div class="main-left content-body">
        <div class="content-timeline">
            <!--Timeline header area start -->
            <div class="post-list-header">
                <h1 class="post-list-title">
                    <a href="danh-sach-san-pham" class="link-category-item">
                        Danh sách sản phẩm
                    </a>
                </h1>
            </div>

            <!--Timeline items start -->
            <div class="timeline-items">
                <?php if (!empty($products)): ?>
                    <?php
                    foreach ($products AS $product):
                        $product_title = $product['title'];
                        $product_slug = Helper::getSlug($product_title);
                        $product_id = $product['id'];
                        $product_link = "chi-tiet-san-pham/$product_slug/$product_id";
                        ?>
                        <!--ITEM-->
                        <div class="timeline-item">
                            <div class="timeline-left">
                                <div class="timeline-left-wrapper">
                                    <a href="<?php echo $product_link; ?>"
                                       class="timeline-category" data-zebra-tooltip=""
                                       title="<?php echo $product['title']?>">
                                        <i class="material-icons"></i></a>
                                    <span class="timeline-date">
                                        <?php echo $product['created_at']; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-right">
                                <div class="timeline-post-image">
                                    <a href="<?php echo $product_link; ?>">
<!--                                     do file index.php gốc của frontend đang nằm dưới 1 cấp
                                         so với thư mục backend, nên cần sử dụng ký tự .. để lên 1 cấp           -->
                                <img src="../backend/assets/uploads/<?php echo $product['avatar']; ?>"
                                             width="260">
                                    </a>
                                </div>
<!--                chi-tiet-san-pham/nishino-bo-ba-thi-dau-o-nhat-se-la-chu-luc-cua-tuyen-thai-lan/5-->
                                <div class="home-page timeline-post-content">
                                    <a href="<?php echo $product_link; ?>"
                                       class="timeline-category-name font-arial">
                                        <?php echo $product['category_name']; ?>
                                    </a>
                                    <a href="<?php echo $product_link; ?>">
                                        <h3 class="timeline-post-title">
                                            <?php echo $product['title']; ?>
                                        </h3>
                                    </a>
                                    <div class="product-price timeline-post-info">
                                        <?php echo number_format($product['price']); ?>đ
                                    </div>
                                    <div class="timeline-post-info">
                                        <a href="them-vao-gio-hang/<?php echo $product['id']?>"
                                           class="product-cart">
                                            Thêm vào giỏ hàng
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END ITEM-->
                    <?php endforeach; ?>
                <?php else: ?>
                    <h2>Không có sản phẩm nào</h2>
                <?php endif; ?>

            </div>
            <!--Timeline items end -->

            <!--Data load more button start  -->
            <!--<div class="load-more">-->
            <!--<button class="load-more-button material-button" type="button">-->
            <!--<i class="material-icons">&#xE5D5;</i>-->
            <!--&lt;!&ndash; <span>Load More</span> &ndash;&gt;-->
            <!--</button>-->
            <!--</div>-->
            <!--Data load more button start  -->
        </div>

        <div class="category-one category-two">

            <h1 class="post-list-title">
                <a href="#" class="link-category-item">Tin mới nhất</a>
            </h1>
            <!--<select class="frm-input">-->
            <!--<option value="1">Thể thao</option>-->
            <!--<option value="1">Book</option>-->
            <!--<option value="1">Cinema</option>-->
            <!--</select>-->

            <div class="two-item-wrap">
                <div class="link-secondary-wrap">
                    <div class="item-link-secondary">
                        <a href="not-defined.html">
                            <img class="secondary-img img-responsive" src="assets/images/category-img-1.png">
                        </a>

                        <div class="two-item-title">
                            <a href="not-defined.html" class="two-item-link">
                                <h4 class="timeline-post-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <div class="category-time-ago">
                                <a href="#" class="timeline-category-name font-arial">Thể thao</a> - <span
                                        class="time-ago">3 phút trước</span>
                            </div>
                            <div class="short-description">
                                Có thể thấy, Lương Thùy Linh ngay từ nhỏ đã được rèn dũa có nét chữ đẹp,
                                ngay
                                ngắn, trình bày gọn gàng.
                                Nhiều người còn ...
                            </div>

                        </div>
                    </div>
                    <div class="item-link-secondary">
                        <a href="not-defined.html">
                            <img class="secondary-img img-responsive" src="assets/images/category-img-1.png">
                        </a>

                        <div class="two-item-title">
                            <a href="not-defined.html" class="two-item-link">
                                <h4 class="timeline-post-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <div class="category-time-ago">
                                <a href="#" class="timeline-category-name font-arial">Thể thao</a> - <span
                                        class="time-ago">3 phút trước</span>
                            </div>
                            <div class="short-description">
                                Có thể thấy, Lương Thùy Linh ngay từ nhỏ đã được rèn dũa có nét chữ đẹp, ngay
                                ngắn, trình bày gọn gàng.
                                Nhiều người còn ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="seperator-line"></div>

        <!--CATEGORY ITEM-->
        <div class="category-two">
            <div class="row">
                <div class="col-md-6 col-sm-6 category-two-item">
                    <h3 class="two-item-heading timeline-post-title">
                        <a href="#" class="link-category-item">Thế giới</a>
                        <span class="link-category-child">
                                    <a href="#" class="link-category-child-item">Điểm tin thế giới</a>
                                    <a href="#" class="link-category-child-item">Khám phá</a>
                                    <a href="#" class="link-category-child-item">Hồ sơ</a>
                                    <a href="#" class="link-category-child-item">Năm châu</a>
                                </span>
                    </h3>
                    <div class="two-item-wrap">
                        <a href="not-defined.html" class="two-item-link-heading">
                            <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img1.jpg"
                                 class="post-image-avatar img-responsive">
                            <h3 class="category-heading timeline-post-title">The Importance Of Letting Your Kids
                                Join After
                                School Activities</h3>
                        </a>
                        <div class="link-secondary-wrap">
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="img-left img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="img-left img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 category-two-item">
                    <h3 class="two-item-heading timeline-post-title">
                        <a href="#" class="link-category-item">Khoa học</a>
                    </h3>
                    <div class="two-item-wrap">
                        <a href="not-defined.html" class="two-item-link-heading">
                            <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img1.jpg"
                                 class="post-image-avatar img-responsive">
                            <h3 class="category-heading timeline-post-title">
                                The Importance Of Letting Your Kids
                                Join After
                                School Activities</h3>
                        </a>
                        <div class="link-secondary-wrap">
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="secondary-img img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="secondary-img img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--CATEGORY ITEM-->
        <div class="category-two">
            <div class="row">
                <div class="col-md-6 col-sm-6 category-two-item">
                    <h3 class="two-item-heading timeline-post-title">
                        <a href="link-category-item">Kinh doanh</a>
                    </h3>
                    <div class="two-item-wrap">
                        <a href="not-defined.html" class="two-item-link-heading">
                            <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img1.jpg"
                                 class="post-image-avatar img-responsive">
                            <h3 class="category-heading timeline-post-title">The Importance Of Letting Your Kids
                                Join After
                                School Activities</h3>
                        </a>
                        <div class="link-secondary-wrap">
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="img-left img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="img-left img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 category-two-item">
                    <h3 class="two-item-heading timeline-post-title">
                        <a href="link-category-item">Sức khỏe</a>
                    </h3>
                    <div class="two-item-wrap">
                        <a href="not-defined.html" class="two-item-link-heading">
                            <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img1.jpg"
                                 class="post-image-avatar img-responsive">
                            <h3 class="category-heading timeline-post-title">
                                The Importance Of Letting Your Kids
                                Join After
                                School Activities</h3>
                        </a>
                        <div class="link-secondary-wrap">
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="secondary-img img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="secondary-img img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--CATEGORY ITEM-->
        <div class="category-two">
            <div class="row">
                <div class="col-md-6 col-sm-6 category-two-item">
                    <h3 class="two-item-heading timeline-post-title">
                        <a href="link-category-item">Thể thao</a>
                    </h3>
                    <div class="two-item-wrap">
                        <a href="not-defined.html" class="two-item-link-heading">
                            <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img1.jpg"
                                 class="post-image-avatar img-responsive">
                            <h3 class="category-heading timeline-post-title">The Importance Of Letting Your Kids
                                Join After
                                School Activities</h3>
                        </a>
                        <div class="link-secondary-wrap">
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="img-left img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="img-left img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 category-two-item">
                    <h3 class="two-item-heading timeline-post-title">
                        <a href="link-category-item">Du lịch</a>
                    </h3>
                    <div class="two-item-wrap">
                        <a href="not-defined.html" class="two-item-link-heading">
                            <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img1.jpg"
                                 class="post-image-avatar img-responsive">
                            <h3 class="category-heading timeline-post-title">
                                The Importance Of Letting Your Kids
                                Join After
                                School Activities</h3>
                        </a>
                        <div class="link-secondary-wrap">
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="secondary-img img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                            <a href="not-defined.html" class="item-link-secondary">
                                <img class="secondary-img img-responsive" src="assets/images/secondary-img1.png">
                                <h4 class="font-arial secondary-title">
                                    Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô số phát
                                    ngôn ấn tượng!
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END MAIN LEFT-->

    <!--MAIN RIGHT-->
    <div class="main-right">
        <!--SIDEBAR RIGHT-->
        <div class="content-sidebar">
            <div class="sidebar_inner">

                <div class="widget-item">
                    <div class="post-list-header">
                        <h1 class="post-list-title">
                            <a href="#" class="link-category-item">Đọc nhiều nhất</a>
                        </h1>
                    </div>
                    <div class="w-boxed-post">
                        <ul>
                            <li class="active">
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img7.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>1</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img5.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>2</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img6.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>3</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img3.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>4</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="widget-item">
                    <div class="w-header">
                        <div class="w-title"></div>
                        <div class="w-seperator"></div>
                    </div>
                    <div class="w-carousel-post">
                        <div class="owl-carousel owl-loaded owl-drag" id="widgetCarousel">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1392px;">
                                    <div class="owl-item active" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <div class="w-play-img">
                                                    <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img4.jpg"
                                                         width="300">
                                                    <span class="w-video-icon"><i
                                                                class="material-icons"></i></span>
                                                </div>
                                                <span class="w-post-title">It has roots in a piece of classical Latin literature from</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img5.jpg"
                                                     width="300">
                                                <span class="w-post-title">Lorem Ipsum used since</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img6.jpg"
                                                     width="300">
                                                <span class="w-post-title">English versions from the 1914 translation</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img7.jpg"
                                                     width="300">
                                                <span class="w-post-title">The standard chunk of Lorem Ipsum used since</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots">
                                <button role="button" class="owl-dot active"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-header">
                    <div class="w-title">Quảng cáo</div>
                    <div class="w-seperator"></div>

                </div>

                <a href="#" class="widget-ad-box">
                    <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/adbox300x250.png"
                         width="300" height="250">
                </a>

            </div>
        </div>
        <!--END SIDEBAR RIGHT-->
    </div>
    <!--END MAIN RIGHT-->
</section>