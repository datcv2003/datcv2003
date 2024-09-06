<?php

require_once "Models/KhachHang.php";

class KhachHangController
{
    protected $user;

    public function __construct()
    {
        $this->user = new KhachHang();
    }

    public function ListUsser()
    {
        $data = $this->user->getAllusername();
        require_once "Views/KhachHang/list.php";
    }
}
