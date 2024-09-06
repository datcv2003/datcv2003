<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Danh mục /</span>Thêm danh mục</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="?url=add-category" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label class="form-label">Mô tả</label>
                            <input type="text" class="form-control" name="mo_ta" id="name" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="prodImg">Ảnh danh mục</label>
                            <input type="file" name="path" class="form-control" id="exampleInputFile">
                        </div>
                        <div class="form-group mb-3">

                            <button type="submit" name="list" class="btn btn-primary" onclick="goToList()">Danh sách</button>
                            <button type="submit" name="them" class="btn btn-success">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function goToList() {
        event.preventDefault();
        window.location.href = "?url=list-category";
    }
</script>