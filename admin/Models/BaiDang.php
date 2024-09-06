<?php
require_once "BaseModel.php";
class BaiDang extends BaseModel
{
    //bài đăng
    public function AllBaidang()
    {
        $sql = "SELECT * FROM tb_baidang where trangthai = 1";
        return $this->SqlExecute($sql);
    }
    public function thembaiviet($tieu_de, $noi_dung, $path, $username, $trangthai)
    {
        $sql = "INSERT INTO tb_baidang(tieu_de, noi_dung, ngay_dang, path, username, trangthai) 
        VALUES ('$tieu_de','$noi_dung',NOW(),'$path','$username', $trangthai)";
        return $this->SqlExecute($sql);
    }
    public function xoaBaiViet($id)
    {
        $sql = "DELETE FROM tb_baidang WHERE id_bai_dang = $id";
        return $this->SqlExecute($sql);
    }
    public function hienthi($id)
    {
        $sql = "SELECT * FROM tb_baidang WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }
    public function suaBaiViet($id, $tieu_de, $noi_dung, $path, $username, $trangthai)
    {
        $sql = "UPDATE tb_baidang SET tieu_de='$tieu_de',noi_dung='$noi_dung',path='$path',username='$username', trangthai='$trangthai' WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }
    public function suaBaiViet2($id, $tieu_de, $noi_dung, $username, $trangthai)
    {
        $sql = "UPDATE tb_baidang SET tieu_de='$tieu_de',noi_dung='$noi_dung',username='$username', trangthai='$trangthai' WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }

    public function TimKiem($tieu_de)
    {
        $sql = "SELECT * FROM tb_baidang WHERE tieu_de LIKE '%$tieu_de%'";
        return $this->SqlExecute($sql, 2);
    }

    public function AnBaiViet($id)
    {
        $sql = "UPDATE tb_baidang SET trangthai = 0 WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }

    public function HienThiDsAn()
    {
        $sql = "SELECT * FROM tb_baidang where trangthai = 0";
        return $this->SqlExecute($sql);
    }
    public function HienThiBaiDang($id)
    {
        $sql = "UPDATE tb_baidang SET trangthai = 1 WHERE id_bai_dang= $id";
        return $this->SqlExecute($sql, 1);
    }
}
