<?php

require_once "./admin/Models/BaseModel.php";

final class Vote extends BaseModel
{
    public function InsertVote($stars, $content, $ip)
    {
        $sql = "INSERT INTO tb_rates(stars, noi_dung, date_rate , ip_address) VALUES('$stars', '$content', NOW() , '$ip')";
        return $this->SqlExecute($sql, 0);
    }

    public function GetIp($ip)
    {
        $sql = "SELECT * FROM tb_rates WHERE ip_address = '$ip'";
        return $this->SqlExecute($sql, 2);
    }

    public function getAvgStars()
    {
        $sql = "SELECT AVG(stars) as average_rating FROM tb_rates;";
        return $this->SqlExecute($sql, 1);
    }
}
