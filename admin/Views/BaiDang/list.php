<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span> Danh sách bài viết</h4>
    <div class="d-flex justify-content-between">
        <div class="link">
            <?php
            foreach ($baidang as $bd) {
            }
            if (isset($bd["trangthai"])) {
                if ($bd['trangthai'] == 0) {
                    echo ' <a href="?url=list-baiviet"><input class="btn btn-info" type="submit" name="them" value="Danh Sách"></a>';
                } elseif ($bd['trangthai'] == 1) {
                    echo '
                    <a href="?url=add-baiviet"><input class="btn btn-success" type="submit" name="them" value="Thêm"></a>
                    <a href="?url=dsan-baiviet"><input class="btn btn-secondary" type="submit" name="an" value="Danh sách ẩn"></a>
                    <a href="?url=export-baiviet"><input class="btn btn-info" type="submit" name="them" value="Xuất Danh Sách"></a>
                    ';
                }
            } else {
                echo ' <a href="?url=list-baiviet"><input class="btn btn-info" type="submit" name="them" value="Danh Sách"></a>';
            }

            ?>
        </div>
        <form action="?url=timkiemBaiDang" method="post">
            <div class="d-flex justify-content-end" style="margin-bottom: 10px;">
                <input class="form-control" type="text" name="tieude" placeholder="nhập tên tiêu đề" style="border-radius: 5px;">
                <input class="btn btn-primary p o v" type="submit" name="bd-seaarch-submit" value="Tìm kiếm">
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Id</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Ngày đăng</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Người đăng</th>
                                <!-- <th scope="col">Trạng thái</th> -->
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($baidang)) {
                                echo <<<HTML
                                    <tr>
                                        <td>Trống !</td>
                                    </tr>
                                HTML;
                            }
                            ?>
                            <?php foreach ($baidang as $key => $bai) :
                                $xoa = "?url=xoa-baiviet&id=" . $bai['id_bai_dang'];
                                $xoa_sort = "?url=xoasort-baiviet&id=" . $bai['id_bai_dang'];
                                $sua = "?url=sua-baiviet&id=" . $bai['id_bai_dang']; ?>
                                <tr>
                                    <td><?= $bai['id_bai_dang'] ?></td>
                                    <td><?= $bai['tieu_de'] ?></td>
                                    <td>
                                        <textarea readonly name="" id="" cols="25" rows="2"><?= $bai['noi_dung'] ?></textarea>
                                    </td>
                                    <td> <?= $bai['ngay_dang'] ?></td>
                                    <td> <img style="width: 50px;height: auto;" src="uploads/<?= $bai['path'] ?>" alt=""></td>
                                    <td><?= $bai['username'] ?></td>

                                    <td>
                                        <div class="change" style="display: flex; ">
                                            <form action="<?= $xoa ?>" method="post">
                                                <input class="btn btn-warning" type="submit" name="" value="Xóa">

                                            </form>
                                            <?php
                                            if ($bd['trangthai'] == 1) {
                                                echo '<a href="' . $xoa_sort . '" class="btn btn-secondary" name="sua">Ẩn</a>';
                                            } elseif ($bd['trangthai'] == 0) {
                                                echo '<a href="?url=hien-baidang&id=' . $bd['id_bai_dang'] . '" class="btn btn-secondary" name="sua">Hiện</a>';
                                            }
                                            ?>

                                            <?php
                                            if ($bd['trangthai'] == 1) {
                                                echo '   <a href="' . $sua . '" class="btn btn-danger" name="sua">Sửa</a>';
                                            } else {
                                            }
                                            ?>
                                        </div>
                                    </td>
                                <?php endforeach ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>