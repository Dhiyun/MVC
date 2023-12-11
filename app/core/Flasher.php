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

    public static function modal() {
        if (isset($_SESSION['flash'])) {
            echo '<div class="modal fade" id="flashModal" tabindex="-1" role="dialog" aria-labelledby="flashModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="flashModalLabel"> ' . $_SESSION['flash']['aksi'] . ' ' . $_SESSION['flash']['aksi'] . '</h5>
                            </div>
                            <div class="modal-body">
                                <strong>' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '</strong>
                            </div>
                            <div class="modal-footer" style="display: flex; justify-content: center;">
                                <button type="button" class="btn" style="display: flex; background-color: #2A1A5E; color: #fff;" onclick="closeModal()">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>';
    
            echo '<script>
                        $(document).ready(function(){
                            $("#flashModal").modal("show");
                        });
    
                        function closeModal() {
                            $("#flashModal").modal("hide");
                        }
                    </script>';
    
            unset($_SESSION['flash']);
        }
    }    
}
?>
