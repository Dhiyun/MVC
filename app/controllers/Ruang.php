<?php

class Ruang extends Controller
{
    public function tambah()
    {
        try {
            if ($this->model("RuangM")->tambahRuang($_POST) > 0) {
                Flasher::setFlash('Ruang Berhasil', 'Ditambahkan', 'success');
                header('Location: ' . ADMINURL . '/ruang');
                exit;
            } else {
                Flasher::setFlash('Ruang Gagal', 'Ditambahkan', 'danger');
                header('Location: ' . ADMINURL . '/ruang');
                exit;
            }
        } catch (PDOException $e) {
            print_r($e->getMessage());
            Flasher::setFlash('Ruang Tidak Sesuai atau Sudah Ada', '', 'info');
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }

    public function hapus($kode)
    {
        if ($this->model("RuangM")->hapusRuang($kode) > 0) {
            Flasher::setFlash('Ruang Berhasil', 'Dihapus', 'success');
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        } else {
            Flasher::setFlash('Ruang Gagal', 'Dihapus', 'success');
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }

    public function edit()
    {
        $model = $this->model("RuangM");

        try {
            if ($model->editRuang($_POST) > 0) {
                Flasher::setFlash('Ruang Berhasil', 'Diubah', 'success');
                header('Location: ' . ADMINURL . '/ruang');
                exit;
            } else {
                Flasher::setFlash('Tidak Ada Perubahan atau Tidak Sesuai', '', 'info');
                header('Location: ' . ADMINURL . '/ruang');
                exit;
            }
        } catch (PDOException $e) {
            Flasher::setFlash('Terjadi kesalahan', '', 'danger');
            header('Location: ' . ADMINURL . '/ruang');
            exit;
        }
    }
}

?>