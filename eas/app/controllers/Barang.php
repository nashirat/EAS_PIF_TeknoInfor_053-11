<?php

class Barang extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Donasi Barang';
        $data['dnt'] = $this->model('Barang_model')->getAllDonate();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Barang_model')->tambahDonasi($_POST) > 0) 
        {
            Flasher::setFlash('berhasil', 'disalurkan', 'success');
            header('Location:'.BASEURL.'/home');
            exit;
        } else
        {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:'.BASEURL.'/home');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Donasi Barang';
        $data['dnt'] = $this->model('Barang_model')->cariDataDonate();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

}