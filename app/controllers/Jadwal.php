<?php

class Jadwal extends Controller
{
    public function tambah()
    {
        if ($this->model("JadwalM")->tambahRuang($_POST) > 0) {
            header('Location: ' . ADMINURL . '/jadwal');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("JadwalM")->hapusRuang($id) > 0) {
            header('Location: ' . ADMINURL . '/jadwal');
            exit;
        }
    }

    public function edit()
    {
        echo 'oe';
        // $this->model('RuangM')->getDataUbah($_POST['kode']);
    }
}

?>
