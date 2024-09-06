<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Single Product Type</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Single Product Variable</li>
            </ul>
        </div>
    </div>
</div>

<!-- Chi tiết sản phẩm -->
<div class="sp-area">
    <div class="container">
        <div class="sp-nav">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sp-img_area">
                        <div class="sp-img_slider slick-img-slider kenne-element-carousel" data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                            <div class="single-slide red zoom">
                                <img src="admin/uploads/<?php echo $data["img_path_default"] ?>" alt="Kenne's Product Image">
                            </div>
                            <?php
                            if (count($img) != 0) {
                                foreach ($img as $key => $value) {
                                    echo <<<HTML
                                            <div class="single-slide red zoom">
                                                <img src="admin/uploads/{$value['path']}" alt="Kenne's Product Image">
                                            </div>
                                        HTML;
                                }
                            } else {
                                for ($i = 0; $i < 4; $i++) {
                                    echo <<<HTML
                                        <div class="single-slide red zoom">
                                                <img src="client/assets/images/product/vay1.jpeg" alt="Kenne's Product Image">
                                            </div>
                                        HTML;
                                }
                            }
                            ?>
                        </div>
                        <div class="sp-img_slider-nav slick-slider-nav kenne-element-carousel arrow-style-2 arrow-style-3" data-slick-options='{
                                "slidesToShow": 3,
                                "asNavFor": ".sp-img_slider",
                                "focusOnSelect": true,
                                "arrows" : true,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                    ]'>
                            <div class="single-slide red zoom">
                                <img src="admin/uploads/<?php echo $data["img_path_default"] ?>" alt="Kenne's Product Image">
                            </div>
                            <?php
                            if (count($img) != 0) {
                                foreach ($img as $key => $value) {
                                    echo <<<HTML
                                            <div class="single-slide red">
                                                <img src="admin/uploads/{$value['path']}" alt="Kenne's Product Image">
                                            </div>
                                        HTML;
                                }
                            } else {
                                for ($i = 0; $i < 4; $i++) {
                                    echo <<<HTML
                                        <div class="single-slide red">
                                                <img src="client/assets/images/product/vay1.jpeg" alt="Kenne's Product Image">
                                            </div>
                                        HTML;
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="sp-content">
                        <div class="sp-heading">
                            <h5><a href="#"><?php echo $data["ten_san_pham"] ?></a></h5>
                        </div>
                        <span class="reference">Giá thuê cho 1 ngày: <a style="color: red;" href=""> <?php echo (!is_null($data["khuyen_mai"])) ? number_format($data["gia_san_pham"] - (($data["khuyen_mai"] / 100) * $data["gia_san_pham"]), 0, '.', ',') : number_format($data["gia_san_pham"], 0, '.', ',') ?> đ</a></span>
                        <div class="rating-box">
                            <ul>
                                <li><i class="ion-android-star"></i></li>
                                <li><i class="ion-android-star"></i></li>
                                <li><i class="ion-android-star"></i></li>
                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                <li class="silver-color"><i class="ion-android-star"></i></li>
                            </ul>
                        </div>
                        <div class="sp-essential_stuff">
                            <ul>
                                <li>Thương hiệu: <a href="javascript:void(0)">NewJeans</a></li>
                                <li>Mã sản phẩm: <a href="javascript:void(0)"><?php echo $data["ma_san_pham"] ?></a></li>
                                <li>Tình trạng: <a href="javascript:void(0)"><?php echo ($data["so_luong"] != 0) ? "Còn hàng" : "Hết hàng" ?></a></li>
                                <li>Khuyến mãi: <a href="javascript:void(0)"><?php echo (!is_null($data["khuyen_mai"])) ? '- ' . $data["khuyen_mai"] . " %" : "Không" ?></a></li>
                                <li>Mô tả: <a href="javascript:void(0)"><span style="color: gray;"><?php echo $data["mo_ta_san_pham"] ?></span></a></li>

                            </ul>
                        </div>
                        <!-- <div class="product-size_box">
                            <span>Size</span>
                            <select class="myniceselect nice-select">
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                            </select>
                        </div> -->
                        <!-- <div class="color-list_area">
                            <div class="color-list_heading">
                                <h4>Available Options</h4>
                            </div>
                            <span class="sub-title">Color</span>
                            <div class="color-list">
                                <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                    <span class="bg-red_color"></span>
                                    <span class="color-text">Red (+$150)</span>
                                </a>
                                <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                    <span class="burnt-orange_color"></span>
                                    <span class="color-text">Orange (+$170)</span>
                                </a>
                                <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                    <span class="brown_color"></span>
                                    <span class="color-text">Brown (+$120)</span>
                                </a>
                                <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                    <span class="raw-umber_color"></span>
                                    <span class="color-text">Umber (+$125)</span>
                                </a>
                                <a href="javascript:void(0)" class="single-color" data-swatch-color="black">
                                    <span class="black_color"></span>
                                    <span class="color-text">Black (+$125)</span>
                                </a>
                            </div>
                        </div> -->
                        <!-- <div class="quantity">
                            <label>Quantity</label>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="1" type="text">
                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                            </div>
                        </div> -->
                        <div class="qty-btn_area">
                            <ul>
                                <li><a class="qty-cart_btn" href="cart.html">Thuê ngay</a></li>
                                <li><a class="qty-cart_btn" href="cart.html">Liên hệ</a></li>
                            </ul>
                        </div>
                       
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bình luận, liên hệ, v.v -->
<div class="product-tab_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sp-product-tab_nav">
                    <div class="product-tab">
                        <ul class="nav product-menu">
                        <li><a data-bs-toggle="tab" href="#reviews"><span>Liên hệ thuê váy</span></a></li>
                            <li><a class="active" data-bs-toggle="tab" href="#description"><span>Bình luận</span></a></li>
                                
                        </ul>
                    </div>
                    <div class="tab-content uren-tab_content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">

                                <!-- Form bình luận -->
                                <form action="?url=comment-sended&idsp=<?= $data["id_san_pham"] ?>" method="post" class="form-horizontal" id="form-review">
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <?php foreach ($comments as $key => $value) : ?>
                                                    <tr>
                                                        <td style="width: 50%;"><strong><?= $value["username"] ?></strong></td>
                                                        <td class="text-right"><?= $value["ngay_binh_luan"] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p><?= $value["noi_dung"] ?></p>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h2>Viết bình luận</h2>
                                    <div class="form-group required">
                                        <div class="col-sm-12 p-0">
                                            <label>Email của bạn <span class="required">*</span></label>
                                            <input class="review-input" type="email" name="con_email" id="con_email" placeholder="Bạn có thể không cần nhập">
                                        </div>
                                    </div>
                                    <div class="form-group required second-child">
                                        <div class="col-sm-12 p-0">
                                            <label class="control-label">Bạn nghĩ gì ?</label>
                                            <textarea class="review-textarea" name="con_message" id="con_message" placeholder="Nhập nội dung bạn muốn bình luận"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group last-child required">
                                        <div class="kenne-btn-ps_right">
                                            <button class="kenne-btn">Bình luận</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                       

                        <!-- Liên hệ -->
                        <div id="reviews" class="tab-pane" role="tabpanel">
                            <div class="tab-pane active" id="tab-review">
                                <div class="container">
                                    <div class="contact-main-page">
                                        <div class="row">
                                            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                                                <div class="contact-page-side-content">
                                                    <h3 class="contact-page-title">Liên hệ chúng tôi</h3>
                                                    <p class="contact-page-message">Sự rõ ràng cũng là một quá trình năng động tuân theo những thói quen
                                                        luôn thay đổi của người đọc. Thật đáng ngạc nhiên khi lưu ý rằng văn học Gothic, thứ mà ngày nay
                                                        chúng ta cho là ít rõ ràng, đã có trước các hình thức văn học của con người như thế nào.</p>
                                                    <div class="single-contact-block">
                                                        <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                                                        <p>199 Hồ tùng mậu</p>
                                                    </div>
                                                    <div class="single-contact-block">
                                                        <h4><i class="fa fa-phone"></i>Số điện thoại</h4>
                                                        <p>Di động: (08) 123 456 789</p>
                                                        <p>Hotline: 09999999</p>
                                                    </div>
                                                    <div class="single-contact-block last-child">
                                                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                                        <p>yourmail@domain.com</p>
                                                        <p>support@hastech.company</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                                                <div class="contact-form-content">
                                                    <h3 class="contact-page-title">Liên hệ với chúng tôi</h3>
                                                    <!-- Phần thống báo lỗi -->
                                                    <!-- <?php
                                                            if (isset($_SESSION['error_mess'])) {
                                                                $error_message =  $_SESSION['error_mess'];
                                                                foreach ($error_message as $message) {
                                                                    foreach ($message as $mess) {
                                                                        echo '<div class="alert alert-danger">' . $mess . '</div>';
                                                                    }
                                                                }
                                                            }
                                                            //Sau khi thông báo lỗi thực hiện xóa session
                                                            unset($_SESSION['error_mess']);
                                                            ?> -->
                                                    <div class="contact-form">
                                                        <form id="" action="?url=contactus&id=<?= $data["id_san_pham"] ?>" method="post">
                                                            <div class="form-group">
                                                                <label>Họ tên<span class="required">*</span></label>
                                                                <input type="text" name="ten_khach_hang" id="ten_khach_hang">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email<span class="required">*</span></label>
                                                                <input type="email" name="email" id="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Số điện thoại<span class="required">*</span></label>
                                                                <input type="text" name="dien_thoai" id="dien_thoai">
                                                            </div>
                                                            <div class="form-group form-group-2">
                                                                <label>Lời nhắn<span class="required">*</span></label>
                                                                <textarea name="noi_dung" id="noi_dung"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="submit" value="Gửi" class="kenne-contact-form_btn" name="submit">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <p class="form-message"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Tab Area Two End Here -->

<!-- Begin Product Area -->
<div class="product-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Có thể bạn quan tâm</h3>
                    <div class="product-arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".product-arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>
                    <?php foreach ($relateProd as $key => $value) : ?>
                        <div class="product-item">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="admin/uploads/<?php echo $value["img_path_default"] ?>" alt="Kenne's Product Image">
                                        <img class="secondary-img" src="admin/uploads/<?php echo $value["img_path_default"] ?>" alt="Kenne's Product Image">
                                    </a>
                                    <span class="sticker-2">Hot</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                            </li>
                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                            </li>
                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                            </li>
                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="single-product.html"><?php echo $value["ten_san_pham"] ?></a></h3>
                                        <div class="price-box">
                                            <span class="new-price"><?php echo $value["gia_san_pham"] ?></span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-area ">
    <div class="container">
        <div class="brand-nav border-top ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kenne-element-carousel brand-slider slider-nav" data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>

                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/1.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/2.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/3.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/5.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/5.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/6.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/1.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/brand/2.png" alt="Brand Images">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>