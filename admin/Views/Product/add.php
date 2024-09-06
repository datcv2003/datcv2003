<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm /</span>Thêm sản phẩm</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="?url=add-product" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên cho sản phẩm">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label" for="prodPrice">Giá </label>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" name="gia_san_pham" class="form-control" placeholder="Nhập giá sản phẩm">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="prodImg">Ảnh sản phẩm</label>
                            <div class="custom-file">
                                <input type="file" name="img_path_default" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label">Mô tả</label>
                            <input type="text" class="form-control" name="mo_ta_san_pham" placeholder="Nhập mô tả">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label">Mã sản phẩm</label>
                            <input type="text" class="form-control" name="ma_san_pham" placeholder="Nhập mã của sản phẩm">
                        </div>
                        

                        <div class="form-group mb-3">
                            <label class="form-label">danh mục</label>
                            <select class="form-select" name="id_danh_muc">
                                <?php foreach ($id_dm as $dm) { ?>
                                    <option value="<?php echo $dm["id_danh_muc"] ?>"><?php echo $dm["mo_ta"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mt-3 mb-3">
                            <button type="submit" name="list" class="btn btn-primary" onclick="goToList()">Danh sách</button>
                            <button type="submit" name="them" class="btn btn-success">Thêm</button>
                        </div>
                    </form>
                   <div class="mt-3">
                    <label for="" class="form-label">Tải excel</label>
                   <form action="?url=import-product" method="post" enctype="multipart/form-data">
                        <input class="custom-file-input" required type="file" name="excelFile">
                        <input class="btn btn-primary" type="submit" value="Tải lên">
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function goToList() {
        event.preventDefault();
        window.location.href = "?url=list-product";
    }
</script>