<?php
//session_start();
require_once "./client/models/LienHe.php";

class lienHeController
{
    public $lienHe;
    public function __construct()
    {
        $this->lienHe = new LienHe;
    }
    public function AllLienHe()
    {
        $lienhe = $this->lienHe->getLienHe();
        include_once "Views/LienHe/list.php";
    }
    public function insertLienHe()
    {
        if (isset($_POST['submit']) && $_POST['submit']) {
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $email = $_POST['email'];
            $dien_thoai = $_POST['dien_thoai'];
            $noi_dung = $_POST['noi_dung'];
            $error = []; // Khai báo mảng chứa lỗi
            //validate tên khách hàng
            if (empty(trim($ten_khach_hang))) {
                $error['ten_khach_hang']['required'] = 'Tên người dùng không được bỏ trống!';
            } else {
                if (strlen(trim($ten_khach_hang)) < 6) {
                    $error['ten_khach_hang']['leght'] = 'Tên người dùng phải trên 6 ký tự'; // Hoặc có thể thay thế bằng min cho leght
                }
            }
            // Validate email
            if (empty(trim($email))) {
                $error['email']['required'] = 'Email không được bỏ trống!';
            } else {
                if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
                    $error['email']['invaild'] = 'Email không hợp lệ';
                }
            }
            // validate số điện thoại
            $pattern = '/^\+84\d{9,10}$/';
            if (empty(trim($dien_thoai))) {
                $error['dien_thoai']['required'] = 'Số điện thoại không được bỏ trống!';
            } else {
                if (preg_match($pattern, $dien_thoai)) {
                    $error['dien_thoai']['invaild'] = 'Số điện thoại không hợp lệ';
                }
            }
            //Validate nội dung
            if (empty(trim($noi_dung))) {
                $error['noi_dung']['required'] = 'Hãy cho chúng tôi biết bạn cần gì?';
            }
            // Kiểm tra có lỗi
            if (!empty($error)) {
                $_SESSION['error_mess'] = $error;
            } else {
                $id_san_pham = '';
                if (isset($_GET["id"])) {
                    $id_san_pham = $_GET["id"];
                } else {
                    $id_san_pham = 4;
                }
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $email = $_POST['email'];
                $username = '';
                if (isset($_SESSION["username"])) {
                    $username = $_SESSION["username"];
                } else {
                    $username = 'customer';
                }
                $dien_thoai = $_POST['dien_thoai'];
                $noi_dung = $_POST['noi_dung'];
                $addlienhe = $this->lienHe->addLienHe($ten_khach_hang, $email, $dien_thoai, $noi_dung, $username, $id_san_pham);
                echo '<script>alert("Liên hệ của bạn đã được gửi đi, hãy chờ hồi đáp sớm nhất của chúng tôi !")</script>';
                echo '<script>window.location.href="?url=/"</script>';
            }
        }
        include 'client/views/ContactUs/contactus.php';
    }
}
