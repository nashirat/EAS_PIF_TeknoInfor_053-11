<?php

class Uang extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Donasi Uang';
        $data['dnt'] = $this->model('Uang_model')->getAllDonate();
        $this->view('templates/header', $data);
        $this->view('uang/index', $data);
        $this->view('templates/footer');
    }

}