<?php
require_once "./admin/Models/BaseModel.php";

class LienHe extends BaseModel
{
    public function getLienHe()
    {
        $sql = "SELECT * FROM tb_lienhe";
        return $this->SqlExecute($sql, 2);
    }
    public function addLienHe($ten_khach_hang, $email, $dien_thoai, $noi_dung, $username, $id_san_pham)
    {
        $sql = "INSERT INTO tb_lienhe(noi_dung, username, email, dien_thoai, ten_khach_hang, id_san_pham, date) 
                VALUES ('$noi_dung', '$username', '$email', '$dien_thoai', '$ten_khach_hang', '$id_san_pham', NOW())";

        return $this->SqlExecute($sql, 0);
    }
}
