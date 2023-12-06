<?php
class Flasher {
    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash() {
        if(isset($_SESSION['flash'])) {
            echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
            <strong>Data '.$_SESSION['flash']['pesan'].' '.$_SESSION['flash']['aksi'].'.</strong>
          </div>';
            unset($_SESSION['flash']);
        }
    }
}
?>