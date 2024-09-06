<style>
    .star {
        display: none;
    }

    .star-label {
        display: inline-block;
        width: 30px;
        height: 30px;
        background-image: url(client/assets/images/star1.png);
        background-size: cover;
        cursor: pointer;
    }

    .star-input:checked+.star-label {
        background-image: url('https://www.example.com/star-filled.png');
        /* Thay thế đường dẫn này bằng đường dẫn đến hình ảnh sao đã được điền của bạn */
    }
</style>
<div class="kenne-footer_area bg-smoke_color">
    <div class="footer-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="newsletter-area">
                        <div class="newsletter-logo">
                            <a href="javascript:void(0)">
                                <img src="client/assets/images/footer/logo/1.png" alt="Logo">
                            </a>
                        </div>
                        <p class="short-desc">Hãy đánh giá trải nghiệm của bạn với cửa hàng !</p>
                        <div class="newsletter-form_wrap">
                            <form action="?url=danhgia" method="post" class="newsletters-form validate" target="_blank" novalidate>
                                <input type="radio" class="star" id="star-1" name="rating" value="1">
                                <label for="star-1" class="star-label"></label>
                                <input type="radio" class="star" id="star-2" name="rating" value="2">
                                <label for="star-2" class="star-label"></label>
                                <input type="radio" class="star" id="star-3" name="rating" value="3">
                                <label for="star-3" class="star-label"></label>
                                <input type="radio" class="star" id="star-4" name="rating" value="4">
                                <label for="star-4" class="star-label"></label>
                                <input type="radio" class="star" id="star-5" name="rating" value="5">
                                <label for="star-5" class="star-label"></label>
                                <span id="status"></span>
                                <div id="mc_embed_signup_scroll">
                                    <div id="mc-form" class="mc-form subscribe-form">
                                        <input name="content" id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Bản cảm thấy thế nào ?" />
                                        <button class="newsletter-btn" id="mc-submit"><i class="ion-android-mail"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <script>
                            let stars = document.getElementsByClassName("star");
                            let starsLabel = document.getElementsByClassName("star-label");
                            let starImgUp = "client/assets/images/star2.png";
                            let starImgDown = "client/assets/images/star1.png";
                            let status = {
                                "1s": {
                                    label: "Tệ",
                                    color: "red"
                                },
                                "2s": {
                                    label: "Kém",
                                    color: "orangered"
                                },
                                "3s": {
                                    label: "Bình thường",
                                    color: "yellow"
                                },
                                "4s": {
                                    label: "Bình thường",
                                    color: "blue"
                                },
                                "5s": {
                                    label: "Tốt",
                                    color: "green"
                                }
                            };

                            for (let i = 0; i < stars.length; i++) {
                                stars[i].addEventListener("click", () => {
                                    if (stars[i].checked) {
                                        for (let j = 0; j <= i; j++) {
                                            starsLabel[j].style.backgroundImage = "url(" + starImgUp + ")";
                                            for (let z = 4; z > i; z--) {
                                                starsLabel[z].style.backgroundImage = "url(" + starImgDown + ")";
                                            }
                                        }
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="row footer-widgets_wrap">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Mua sắm </h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <li><a href="javascript:void(0)">Sản phẩm</a></li>
                                    <li><a href="javascript:void(0)">Giỏ hàng của tôi</a></li>
                                    <li><a href="javascript:void(0)">Danh sách yêu thích</a></li>
                                    <li><a href="javascript:void(0)">Giỏ hàng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <li><a href="javascript:void(0)">Đăng nhập</a></li>
                                    <li><a href="javascript:void(0)">Đăng ký</a></li>
                                    <li><a href="javascript:void(0)">Trợ giúp</a></li>
                                    <li><a href="javascript:void(0)">Ủng hộ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Thể loại </h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <li><a href="javascript:void(0)">Đàn ông </a></li>
                                    <li><a href="javascript:void(0)">Phụ nữ </a></li>
                                    <li><a href="javascript:void(0)">Quần Jeans</a></li>
                                    <li><a href="javascript:void(0)">Quần Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright">
                        <span>Copyright &copy; 2023 <a href="javascript:void(0)">Kenne.</a> All rights
                            reserved.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment">
                        <img src="client/assets/images/footer/payment/1.png" alt="Kenne's Payment Method">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Footer Area End Here -->

<!-- Scroll To Top Start -->
<a class="scroll-to-top" href="#"><i class="ion-chevron-up"></i></a>
<!-- Scroll To Top End -->

</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="client/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="client/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Modernizer JS -->
<script src="client/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<!-- Bootstrap JS -->
<script src="client/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Slick Slider JS -->
<script src="client/assets/js/plugins/slick.min.js"></script>
<!-- Barrating JS -->
<script src="client/assets/js/plugins/jquery.barrating.min.js"></script>
<!-- Counterup JS -->
<script src="client/assets/js/plugins/jquery.counterup.js"></script>
<!-- Nice Select JS -->
<script src="client/assets/js/plugins/jquery.nice-select.js"></script>
<!-- Sticky Sidebar JS -->
<script src="client/assets/js/plugins/jquery.sticky-sidebar.js"></script>
<!-- Jquery-ui JS -->
<script src="client/assets/js/plugins/jquery-ui.min.js"></script>
<script src="client/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
<!-- Theia Sticky Sidebar JS -->
<script src="client/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
<!-- Waypoints JS -->
<script src="client/assets/js/plugins/waypoints.min.js"></script>
<!-- jQuery Zoom JS -->
<script src="client/assets/js/plugins/jquery.zoom.min.js"></script>
<!-- Timecircles JS -->
<script src="client/assets/js/plugins/timecircles.js"></script>

<!-- Main JS -->
<script src="client/assets/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/kenne/kenne/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 08:41:32 GMT -->

</html>