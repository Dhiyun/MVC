<?php

class Dosen extends Controller
{
    public function tambah()
    {
        try {
            if ($this->model("DosenM")->tambahDosen($_POST) > 0) {
                Flasher::setFlash('Dosen Berhasil', 'Ditambahkan', 'success');
                header('Location: ' . ADMINURL . '/dosen');
                exit;
            } else {
                Flasher::setFlash('Dosen Gagal', 'Ditambahkan', 'danger');
                header('Location: ' . ADMINURL . '/dosen');
                exit;
            }
        } catch (PDOException $e) {
            Flasher::setFlash('Dosen Tidak Sesuai atau Sudah Ada', '', 'warning');
            header('Location: ' . ADMINURL . '/dosen');
            exit;
        }
    }

    public function hapus($kode)
    {
        if ($this->model("DosenM")->hapusDosen($kode) > 0) {
            Flasher::setFlash('Dosen Berhasil', 'Dihapus', 'success');
            header('Location: ' . ADMINURL . '/dosen');
            exit;
        } else {
            Flasher::setFlash('Dosen Gagal', 'Dihapus', 'danger');
            header('Location: ' . ADMINURL . '/dosen');
            exit;
        }
    }

    public function edit()
    {
        $model = $this->model("DosenM");

        try {
            if ($model->editDosen($_POST) > 0) {
                Flasher::setFlash('Dosen Berhasil', 'Diubah', 'success');
                header('Location: ' . ADMINURL . '/dosen');
                exit;
            } else {
                Flasher::setFlash('Terjadi kesalahan', '', 'danger');
                header('Location: ' . ADMINURL . '/dosen');
                exit;
            }
        } catch (PDOException $e) {

            Flasher::setFlash('Tidak Ada Perubahan atau Tidak Sesuai', '', 'warning');
            header('Location: ' . ADMINURL . '/dosen');
            exit;
        }
    }
}

?>