<?php
require_once "./admin/Models/BaseModel.php";

class Comment extends BaseModel
{
    public function InsertComment($username, $content, $id_san_pham)
    {
        $sql = "INSERT INTO tb_binhluan(noi_dung, ngay_binh_luan, username, id_san_pham) VALUES('$content', NOW(), '$username', '$id_san_pham')";
        return $this->SqlExecute($sql, 0);
    }
}
