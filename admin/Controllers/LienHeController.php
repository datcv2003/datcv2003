<?php
require_once "Models/LienHe.php";
class LienHeController
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
            $addlienhe = $this->lienHe->addLienHe($ten_khach_hang, $email, $dien_thoai, $noi_dung);
        }
        include 'client/Views/ContactUs/contactus.php';
    }
    public function editLH()
    {
        $id_lienhe = $_GET['id_lh'];
        $trangthai = $this->lienHe->getLienHeDetails($id_lienhe);
        switch ($trangthai["trang_thai"]) {
            case 'Chưa Liên Hệ':
                $this->lienHe->editTrangThai($id_lienhe, "Đã Liên Hệ");
                break;
            case 'Đã Liên Hệ':
                $this->lienHe->editTrangThai($id_lienhe, "Đã Liên Hệ Lần 1");
                break;
            case 'Đã Liên Hệ Lần 1':
                $this->lienHe->editTrangThai($id_lienhe, "Đã Liên Hệ Lần 2");
                break;
            case 'Đã Liên Hệ Lần 2':
                $this->lienHe->editTrangThai($id_lienhe, "Đã Liên Hệ Lần 3");
                break;
            case 'Đã Liên Hệ Lần 3':
                $this->lienHe->editTrangThai($id_lienhe, "Hoàn thành");
                break;
        }
        echo "<script>window.location.href='?url=list-lienhe'</script>";
    }
}
