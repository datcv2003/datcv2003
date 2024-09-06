<?php
require_once "./client/Models/ProductCli.php";

class ProductController
{
    protected $product;

    public function __construct()
    {
        $this->product = new ProductCli();
    }

    public function ListProduct()
    {
        $data = [];
        $tittle = "";
        switch ($_GET["url"]) {
            case 'aodaicuoi':
                $data = $this->product->listFilter(4);
                $tittle = "Áo dài cưới";
                break;
            case 'aocuoidiban':
                $data = $this->product->listFilter(5);
                $tittle = "Áo cưới đi bàn";
                break;
            case 'aocuoilamle':
                $data = $this->product->listFilter(3);
                $tittle = "Áo cưới làm lễ";
                break;
            case 'all-aocuoi':
                $data = $this->product->allProduct();
                $tittle = "Tất cả";
                break;
            default:
                $data = $this->product->allProduct();
                $tittle = "Tất cả";
                break;
        }
        require "client/Views/Product/list.php";
    }

    public function ListFiltered()
    {
        $vcll = $this->product->GetRelateProduct(3);
        $adc = $this->product->GetRelateProduct(4);
        $vcdb = $this->product->GetRelateProduct(5);
        $data = $this->product->allProduct();
        require_once "client/Views/home.php";
    }

    public function ProductDetails()
    {
        if ($_GET["url"] = "productdetail") {
            $id = $_GET["id"];
            $data = $this->product->Details($id);
            $relateProd = $this->product->GetRelateProduct($data["id_danh_muc"]);
            $img = $this->product->GetImgVariants($id);
            $comments = $this->product->GetComments($id);
            $rates = $this->product->GetRate($id);
            require_once "client/Views/Product/details.php";
        }
    }
}
