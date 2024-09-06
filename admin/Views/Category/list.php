<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Danh mục /</span> Danh sách danh mục</h4>
    <div class="mb-3">
        <a href="?url=add-category"><input class="btn btn-success" type="submit" name="them" value="Thêm"></a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">mô tả</th>
                                <th scope="col">ảnh</th>
                                <th scope="col">thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($danhmuc as $key => $ca) :
                                $xoa = "?url=xoa-category&id=" . $ca['id_danh_muc'];
                                $sua = "?url=sua-category&id=" . $ca['id_danh_muc']; ?>
                                <tr>
                                    <td><?= $ca['id_danh_muc'] ?></td>
                                    <td><?= $ca['mo_ta'] ?></td>
                                    <td> <img style="width: 50px;height: auto;" src="uploads/<?= $ca['path'] ?>" alt=""></td>
                                    <td>
                                        <div class="change" style="display: flex; ">
                                            <form action="<?= $xoa ?>" method="post">

                                                <input class="btn btn-danger me-2" type="submit" name="" value="xóa">
                                            </form>
                                            <form action="<?= $sua ?>" method="post">
                                                <input class="btn btn-warning me-2" type="submit" name="sua-category" value="sửa">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>