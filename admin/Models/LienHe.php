<?php
require_once "BaseModel.php";

class LienHe extends BaseModel
{
    public function getLienHe()
    {
        $sql = "SELECT * FROM tb_lienhe ORDER BY `date` DESC";
        return $this->SqlExecute($sql, 2);
    }
    public function addLienHe($ten_khach_hang, $email, $dien_thoai, $noi_dung)
    {
        $sql = "INSERT INTO tb_lienhe(ten_khach_hang,email,dien_thoai,noi_dung) 
                VALUES ('$ten_khach_hang','$email','$dien_thoai','$noi_dung')";

        return $this->SqlExecute($sql, 0);
    }

    public function getLienHeDetails($id)
    {
        $sql = "SELECT * FROM tb_lienhe Where id_lienhe = '$id'";
        return $this->SqlExecute($sql, 1);
    }
    public function editTrangThai($id_lienhe, $trangThai)
    {
        $sql = "UPDATE tb_lienhe SET trang_thai='$trangThai' WHERE id_lienhe=" . $id_lienhe;
        return $this->SqlExecute($sql, 0);
    }
}
