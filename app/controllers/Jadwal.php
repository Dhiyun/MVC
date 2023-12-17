<?php

class Jadwal extends Controller {
    public function tambah() {
        if($this->model("JadwalM")->tambahJadwal($_POST) > 0) {
            Flasher::setFlash('Jadwal Berhasil', 'Ditambahkan', 'success');
            header('Location: '.ADMINURL.'/jadwal');
            exit;
        } else {
            Flasher::setFlash('Jadwal Gagal', 'Ditambahkan', 'danger');
            header('Location: '.ADMINURL.'/jadwal');
            exit;
        }
    }

    public function hapus($id) {
        if($this->model("JadwalM")->hapusJadwal($id) > 0) {
            Flasher::setFlash('Jadwal Berhasil', 'Dihapus', 'success');
            header('Location: '.ADMINURL.'/jadwal');
            exit;
        } else {
            Flasher::setFlash('Jadwal Gagal', 'Dihapus', 'danger');
            header('Location: '.ADMINURL.'/jadwal');
            exit;
        }
    }

    public function edit() {
        $model = $this->model("JadwalM");

        try {
            if($model->editJadwal($_POST) > 0) {
                Flasher::setFlash('Jadwal Berhasil', 'Diubah', 'success');
                header('Location: '.ADMINURL.'/jadwal');
                exit;
            } elseif($model->editJadwal($_POST) == 0) {
                Flasher::setFlash('Tidak Ada Perubahan atau Tidak Sesuai', '', 'warning');
                header('Location: '.ADMINURL.'/jadwal');
                exit;
            } else {
                Flasher::setFlash('Jadwal Gagal', 'Diubah', 'danger');
                header('Location: '.ADMINURL.'/jadwal');
                exit;
            }
        } catch (PDOException $e) {
            Flasher::setFlash('Jadwal Gagal', 'Diubah', 'danger');
            header('Location: '.ADMINURL.'/jadwal');
            exit;
        }
    }
}

?>