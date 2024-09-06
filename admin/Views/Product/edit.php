<?php if (is_array($hienThiSanPham)) {
    extract($hienThiSanPham);
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm /</span> Sửa sản phẩm</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="?url=sua-product" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label class="form-label" for="ID">ID sản phẩm </label>
                            <input type="text" name="id_san_pham" class="form-control" readonly value="<?= $id_san_pham ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="Name">Tên sản phẩm </label>
                            <input type="text" name="ten_san_pham" class="form-control" value="<?= $ten_san_pham ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="prodPrice">Giá </label>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" name="gia_san_pham" class="form-control" value="<?= $gia_san_pham ?>">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Ảnh </label>

                            <input type="file" name="img_path_default" class="custom-file-input" id="exampleInputFile" value="">
                            <img src="uploads/<?= $img_path_default ?>" alt="" height="100px">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Mô tả </label>
                            <textarea class="form-control" name="mo_ta_san_pham" id="basic-icon-default-message" cols="30" rows="5"><?= $mo_ta_san_pham ?>"</textarea>

                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Mã sản phẩm </label>
                            <input type="text" name="ma_san_pham" class="form-control" value="<?= $ma_san_pham ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Id danh mục</label>
                            <select class="form-select" name="id_danh_muc">
                                <?php foreach ($danhmuc as $dm) { ?>
                                    <option value="<?php echo $dm["id_danh_muc"] ?>"><?php echo $dm["mo_ta"] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Trạng thái</label>
                            <select class="form-select" name="status">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>

                        <input type="hidden" name="id_san_pham" value="<?= $id_san_pham ?>">

                        <input type="submit" name="list" class="btn btn-primary" value="Danh sách" onclick="goToList()">
                        <input type="submit" name="sua" class="btn btn-warning" value="Sửa">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function goToList(params) {
        event.preventDefault();
        window.location.href = "?url=list-product";
    }
</script>