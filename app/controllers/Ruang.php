<?php

class Ruang extends Controller
{
    public function tambah()
    {
        // var_dump($_POST);
        if ($this->model("RuangM")->tambahRuang($_POST) > 0) {
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }

    public function hapus($kode)
    {
        // var_dump($_POST);
        if ($this->model("RuangM")->hapusRuang($kode) > 0) {
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }
}

?>