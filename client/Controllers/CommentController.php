<?php
require_once "./client/Models/Comment.php";

class CommentController
{

    protected $comment;

    public function __construct()
    {
        $this->comment = new Comment();
    }

    public function Sended()
    {
        if (isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
            $content = $_POST["con_message"];
            $id_san_pham = $_GET["idsp"];
            $flag = $this->comment->InsertComment($username, $content, $id_san_pham);
            if ($flag) {
                echo "<script>window.location.href='?url=productdetail&id=" . $id_san_pham . "'</script>";
            }
        }
        else {
            echo "<script>alert('Vui lòng đăng nhập để bình luận')</script>";
            echo "<script>window.location.href='client/Views/login-register/login.php'</script>";
        }
    }
}
