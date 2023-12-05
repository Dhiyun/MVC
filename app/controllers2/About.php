<?php

class About extends Controller {
    public function index($nama = 'Dhika', $pekerjaan = 'SWAT', $umur = 19) {
        $data['judul'] = 'AboutIndex';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('about/index', $data);
    }

    public function page(){
        $data['judul'] = 'AboutPage';
        $this->view('about/page');
    }
}