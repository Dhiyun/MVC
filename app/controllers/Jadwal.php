<?php

class Jadwal extends Controller
{
    public function tambah()
    {
        if ($this->model("JadwalM")->tambahJadwal($_POST) > 0) {
            header('Location: ' . ADMINURL . '/jadwal');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model("JadwalM")->hapusJadwal($id) > 0) {
            header('Location: ' . ADMINURL . '/jadwal');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model("JadwalM")->editJadwal($_POST) > 0) {
            header('Location: ' . ADMINURL . '/jadwal');
            exit;
        }
    }
}

?>
