<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->get_all();
        $this->view('template/header');
        $this->view('mahasiswa/index', $data);
    }
}