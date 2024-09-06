<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm /</span> Danh sách sản phẩm</h4>
    <div class="d-flex justify-content-between" style="margin-bottom: 15px;">

        <div class="link">
            <?php
            foreach ($sanpham as $key => $sp) {
            }
            if (isset($sp["status"])) {
                if ($sp['status'] == 1) {
                    echo <<<HTML
                        <a href="?url=add-product"><input class="btn btn-success" type="submit" name="them" value="Thêm"></a>
                        <a href="?url=sp-an"><input class="btn btn-secondary" type="submit" name="span" value="Sản phẩn ẩn"></a>
                    HTML;
                } else {
                }
            }
            ?>


            <?php
            if (isset($sp["status"])) {
                if ($sp['status'] == 0) {
                    echo ' <a href="?url=list-product"><input class="btn btn-info" type="submit" name="them" value="Danh Sách"></a>';
                } elseif ($sp['status'] == 1) {
                    echo '<a href="?url=xuat-ds-product"><input class="btn btn-info" type="submit" name="them" value="Xuất Danh Sách"></a>';
                }
            } else {
                echo ' <a href="?url=list-product"><input class="btn btn-info" type="submit" name="them" value="Danh Sách"></a>';
            }
            ?>
        </div>

        <form method="post" action="?url=search-product">
            <div class="d-flex justify-content-end">
                <input class="p o v l" type="text" name="noidung" placeholder="Nhập áo cưới cần tìm"
                    style="border-radius: 5px;">
                <input class="btn btn-primary p o v" type="submit" name="timkiem" value="Tìm kiếm">
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Sp</th>
                            <th>Giá Sp</th>
                            <th>Ảnh</th>
                            <th>Mô tả</th>
                            <th>Mã Sp</th>
                            <th>Sl còn</th>
                            <th>Danh mục</th>
                            <th>thao tác</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (count($sanpham) == 0) {
                            echo <<<HTML
                                <tr>
                                    <td>Trống !</td>
                                </tr>
                            HTML;
                        }
                        ?>
                        <?php foreach ($sanpham as $key => $sp) :

                            $xoa_sort = "?url=sort-delete-product&id=" . $sp['id_san_pham'];
                            $xoa = "?url=xoa-product&id=" . $sp['id_san_pham'];
                            $sua = "?url=sua-product&id=" . $sp['id_san_pham']; ?>

                            <tr>
                                <td><?= $sp['id_san_pham'] ?></td>
                                <td><?= $sp['ten_san_pham'] ?></td>
                                <td style="color: red;"><?= number_format($sp['gia_san_pham'], 0, '.', ',') ?> đ</td>
                                <td> <img style="width: 50px;height: auto;" src="uploads/<?= $sp['img_path_default'] ?>" alt=""></td>
                                <td>
                                    <textarea readonly name="" id="" cols="25"
                                        rows="2"><?= $sp['mo_ta_san_pham'] ?></textarea>
                                </td>
                                <td>
                                    <?= $sp['ma_san_pham'] ?>
                                </td>
                                <td>
                                    <?= $sp['so_luong'] ?>
                                </td>
                                <td>
                                    <?= $sp['id_danh_muc'] ?>
                                </td>
                                <td><?= $sp['ma_san_pham'] ?></td>
                                <td><?= $sp['so_luong'] ?></td>
                                <td><?= $sp['mo_ta'] ?></td>
                                <td>
                                    <div class="change" style="display: flex; ">
                                        <form action="<?= $xoa_sort ?>" method="post">
                                            <?php
                                            if ($sp['status'] == 0) {
                                                echo '
                                                    <a href="?url=hien-product&id=' . $sp['id_san_pham'] . '" name ="hien"  class="btn btn-secondary me-2" >Hiện</a>     
                                                    ';
                                            } elseif ($sp['status'] == 1) {
                                                echo '<input class="btn btn-secondary me-2" type="submit" name="xoa" value="Ẩn">';
                                            }
                                            ?>
                                        </form>
                                        <form action="<?= $xoa ?>" method="post">
                                            <input class="btn btn-danger me-2" type="submit" name="xoa" value="Xóa">
                                        </form>
                                        <?php
                                        if ($sp['status'] == 1) {
                                            echo '
                                            <a href="?url=sua-product&id=' . $sp['id_san_pham'] . '" class="btn btn-warning"  name="sua">Sửa</a>
                                        ';
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