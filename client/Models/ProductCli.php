
<?php
require_once "./admin/Models/BaseModel.php";

class ProductCli extends BaseModel
{
    public function allProduct()
    {
        $sql = "SELECT * FROM tb_sanpham WHERE `status` = 1";
        return $this->SqlExecute($sql, 2);
    }

    public function Details($id)
    {
        $sql = "SELECT * FROM tb_sanpham WHERE id_san_pham = '$id'";
        return $this->SqlExecute($sql, 1); //1 là để fetch lấy duy nhất 1 cột dữ liệu
    }

    public function GetRelateProduct($id_dm)
    {
        $sql = "SELECT * FROM tb_sanpham WHERE id_danh_muc = '$id_dm' AND `status` != 0";
        return $this->SqlExecute($sql, 2); //2 là để fetch lấy duy nhất 1 cột dữ liệu
    }

    public function GetImgVariants($id)
    {
        $sql = "SELECT * FROM tb_anhsp WHERE id_san_pham = '$id'";
        return $this->SqlExecute($sql, 2);
    }

    public function listFilter($filter)
    {
        $sql = "SELECT * FROM tb_sanpham WHERE id_danh_muc = '$filter' AND `status` = 1";
        return $this->SqlExecute($sql, 2); // 2 là sẽ fetch all lấy nhiều cột dữ liệu
    }

    public function GetComments($id)
    {
        $sql = "SELECT * FROM tb_binhluan WHERE id_san_pham = '$id'";
        return $this->SqlExecute($sql, 2);
    }

    public function GetRate($id)
    {
        $sql = "SELECT * FROM tb_danhgia WHERE id_san_pham = '$id'";
        return $this->SqlExecute($sql, 2);
    }
}
