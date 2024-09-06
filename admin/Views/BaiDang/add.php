<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span>Thêm bài viết</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="?url=add-baiviet" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" name="tieu_de" id="name" placeholder="Nhập tiêu đề cho bài viết">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Nội dung</label>
                            <input type="text" class="form-control" name="noi_dung" id="name" placeholder="Nhập nội dung cho bài viết">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="prodImg">Ảnh bài viết</label>
                            <div class="custom-file">
                                <input type="file" name="path" class="form-control" id="exampleInputFile">
                            </div>
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

                        <div class="form-group mb-3">
                            <button type="submit" name="list" class="btn btn-primary" onclick="goToList()">Danh sách</button>
                            <button type="submit" name="them" class="btn btn-success">Thêm</button>
                        </div>
                    </form>
                    <form action="?url=import-baidang" method="post" enctype="multipart/form-data">
                        <input require type="file" name="file">
                        <input class="btn btn-primary" type="submit" value="Tải lên">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function goToList() {
        event.preventDefault();
        window.location.href = "?url=list-baiviet";
    }
</script>