<?php

class Uang_model {
    private $table = 'donate';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllDonate()
    {
       $this->db->query("SELECT * FROM donate WHERE (nominal IS NOT NULL) AND nominal IS NOT NULL AND nominal != '' ORDER BY tanggal DESC");
       return $this->db->resultSet();
    }
}