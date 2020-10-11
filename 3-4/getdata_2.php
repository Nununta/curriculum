<?php
require_once("pdo_1.php");

class getData {

    public $pdo;
    public $data;

    function __construct(){
        $this->pdo = connect();
    }

    public function getUserData(){
        $getusrs_sql = "SELECT * FROM users limit 1";
        $users_data = $this->pdo->query($getusrs_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }

    public function getPostData() {
        $getposts_sql = "select * from posts order by id desc";
        $posts_data = $this->pdo->query($getposts_sql);
        return $posts_data;
    }




}

?>