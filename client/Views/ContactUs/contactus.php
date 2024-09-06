<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Liên hệ</h2>
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.646172970589!2d105.75938951476276!3d21.03807479233165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1d4c91d0e3%3A0x9d5e71e1280c98cb!2sFPT%20Polytechnic!5e0!3m2!1sen!2s!4v1641716708537!5m2!1sen!2s" height="500" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Liên hệ chúng tôi</h3>
                    <p class="contact-page-message">Sự rõ ràng cũng là một quá trình năng động tuân theo những thói quen
                        luôn thay đổi của người đọc. Thật đáng ngạc nhiên khi lưu ý rằng văn học Gothic, thứ mà ngày nay
                        chúng ta cho là ít rõ ràng, đã có trước các hình thức văn học của con người như thế nào.</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                        <p>Số 8, nghách 3/1, ngõ 3, phú kiều, kiều mai</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Điện thoại</h4>
                        <p>Di động: (08) 123 456 789</p>
                        <p>Hotline: 0981679804</p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>abc.fpt.edu.vn.com</p>
                        <p>support@hastech.company</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content">
                    <h3 class="contact-page-title">Liên hệ với chúng tôi</h3>
                    <!-- Phần thống báo lỗi -->
                    <?php
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
                            ?>
                    <div class="contact-form">
                        <form id="" action="?url=contactus" method="post">
                            <div class="form-group">
                                <label>Họ tên<span class="required">*</span></label>
                                <input class="form-control" type="text" name="ten_khach_hang" id="ten_khach_hang">
                            </div>
                            <div class="form-group">
                                <label>Email <span class="required">*</span></label>
                                <input class="form-control" type="email" name="email" id="email">
                            </div>

                            
                         <div class="row">

                         <div class="col-md-6">
                                <label>Số điện thoại<span class="required">*</span></label>
                                <input class="form-control" type="text" name="dien_thoai" id="dien_thoai">
                            </div>



                            <div class="col-md-6">
                            <label>Dịch vụ<span class="required">*</span></label>
                                <select class="form-control" >
                                    <option value="option1">Chọn dịch vụ</option>
                                    <option value="option2">Váy cưới làm lễ</option>
                                    <option value="option3">Váy cưới đi bàn</option>
                                    <option value="option4">Áo dài cưới</option>
                                    <option value="option5">Phụ kiện</option>
                                </select>
                            </div>
                         </div>


                            <div class="form-group form-group-2">
                                <label>Lời nhắn<span class="required">*</span></label>
                                <textarea class="form-control" name="noi_dung" id="noi_dung"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Gửi" class="kenne-contact-form_btn" name="submit">
                            </div>



                    </div>

                    </form>
                </div>
                <p class="form-message"></p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Contact Main Page Area End Here -->

<!-- Begin Brand Area -->
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
                                <img src="client/assets/images/brand/4.png" alt="Brand Images">
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
<!-- Brand Area End Here -->