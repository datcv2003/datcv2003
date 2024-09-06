<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Khách hàng /</span> Danh sách Khách hàng</h4>
    <div class="d-flex d-flex justify-content-between" style="margin-bottom: 10px;">
        <div>
            <a href="?url=add-baiviet"><input class="btn btn-success" type="submit" name="them" value="Thêm"></a>
            <a href="?url=export-baiviet"><input class="btn btn-info" type="submit" name="them" value="Xuất Danh Sách"></a>
        </div>
        <form action="?url=timkiemBaiDang" method="post">
            <div class="d-flex justify-content-end">
                <input class="form-control" type="text" name="tieude" placeholder="nhập tên tiêu đề">
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
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Tên</th>
                                <th scope="col">SDT</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Quyền</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tương tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key => $value) :
                                $xoa = "?url=xoa-user&id=" . $value['username'];
                                $sua = "?url=sua-user&id=" . $value['username']; ?>
                                <tr>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= $value['password'] ?></td>
                                    <td><?= $value['ten_khach_hang'] ?></td>
                                    <td><?= $value['dien_thoai'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['dia_chi'] ?></td>
                                    <td><?= $value['quyen_han'] ?></td>
                                    <td><?= $value['trang_thai'] ?></td>
                                    <td>
                                        <div class="change" style="display: flex; ">
                                            <form action="<?= $xoa ?>" method="post">
                                                <input class="btn btn-danger me-2" type="submit" name="" value="xóa">
                                            </form>
                                            <form action="<?= $sua ?>" method="post">
                                                <input class="btn btn-warning" type="submit" name="sua" value="sửa">
                                            </form>
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