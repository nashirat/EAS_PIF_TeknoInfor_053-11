<?php

class Barang_model {
    private $table = 'donate';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllDonate()
    {
       $this->db->query("SELECT * FROM donate WHERE (barang IS NOT NULL) AND barang IS NOT NULL AND barang != '' ORDER BY tanggal DESC");
       return $this->db->resultSet();
    }

    public function tambahDonasi($data)
    {
        $query = "INSERT INTO donate
                    VALUES
                    ('', :nama, :tanggal, :barang, :kategori, :jumlah, :nominal)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('barang', $data['barang']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('nominal', $data['nominal']);

        $this->db->execute();

        return $this->db->rowCount();
       
    }

    public function cariDataDonate()
    {
        $keyword = $_POST['keyword'];

        if($keyword == 'Makanan')
        {
            $query = "SELECT * FROM donate WHERE kategori LIKE :keyword AND barang IS NOT NULL AND barang != '' ORDER BY tanggal DESC";
        }
         elseif($keyword == 'Obat') 
        {
            $query = "SELECT * FROM donate WHERE kategori LIKE :keyword AND barang IS NOT NULL AND barang != '' ORDER BY tanggal DESC";
        }
         elseif($keyword == "Pakaian")
        {
            $query = "SELECT * FROM donate WHERE kategori LIKE :keyword AND barang IS NOT NULL AND barang != '' ORDER BY tanggal DESC";
        }elseif($keyword == "Alat Kesehatan")
        {
            $query = "SELECT * FROM donate WHERE kategori LIKE :keyword AND barang IS NOT NULL AND barang != '' ORDER BY tanggal DESC";
        }elseif($keyword == "Lain-lain")
        {
            $query = "SELECT * FROM donate WHERE kategori LIKE :keyword AND barang IS NOT NULL AND barang != '' ORDER BY tanggal DESC";
        }else 
        {
            $query = "SELECT * FROM donate WHERE (barang IS NOT NULL) AND barang IS NOT NULL AND barang != '' ORDER BY tanggal DESC";
        }

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
        
    }

}