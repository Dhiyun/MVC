<?php

class Ruang extends Controller
{
    public function tambah()
    {
        if ($this->model("RuangM")->tambahRuang($_POST) > 0) {
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }

    public function hapus($kode)
    {
        if ($this->model("RuangM")->hapusRuang($kode) > 0) {
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model("RuangM")->editRuang($_POST) > 0) {
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }
}

?>
