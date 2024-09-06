<?php if (is_array($hienThiBaiViet)) {
    extract($hienThiBaiViet);
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span> Sửa bài viết</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="?url=sua-baiviet" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label class="form-label" for="ID">ID bài viết: </label>
                            <input type="text" name="id_bai_dang" class="form-control" readonly value="<?= $id_bai_dang ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="Name">Tiêu đề:</label>
                            <input type="text" name="tieu_de" class="form-control" value="<?= $tieu_de ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Nội dung:</label>
                            <input type="text" name="noi_dung" class="form-control" value="<?= $noi_dung ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Ảnh </label>
                            <input type="file" name="path" class="custom-file-input" id="exampleInputFile" value="">
                            <img src="uploads/<?= $path ?>" alt="" height="100px">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Người đăng</label>
                            <select class="form-select" name="username">
                                <?php foreach ($listusername as $pr) { ?>
                                    <option value="<?php echo $pr["username"] ?>"><?php echo $pr["username"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Trạng thái</label>
                            <select class="form-select" name="trangthai">
                                <option value="1" >Bài viết đang hiển thị</option>
                                <option value="0">Bài viết đang ẩn</option>
                            </select>
                        </div>

                        <input type="hidden" name="id_bai_dang" value="<?= $id_bai_dang ?>">

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
        window.location.href = "?url=list-baiviet";
    }
</script>