<?php

require_once "client/Models/Vote.php";

class VoteController
{
    protected $vote;
    public function __construct()
    {
        $this->vote = new Vote();
    }

    public function AddVote()
    {
        $stars = '';
        if (isset($_POST["rating"])) {
            $stars = $_POST["rating"];
        }
        $content = $_POST["content"];
        $ip = $_SERVER["REMOTE_ADDR"];
        $checkip = $this->vote->GetIp($ip);
        if (empty($checkip)) {
            $this->vote->InsertVote($stars, $content, $ip);
            echo "<script>window.location.href='?url=/'</script>";
        } else {
            echo "<script>alert('Bạn đã đánh giá trước đó rồi !')</script>";
            echo "<script>window.location.href='?url=/'</script>";
        }
    }

    public function Index()
    {
        $stars = $this->vote->getAvgStars();
        require_once "client/Views/About/aboutus.php";
    }
}
