<?php

include '../app/fungsi/pesan_kilat.php';

class Reg extends Controller {
    public function index() {
        $data['judul'] = 'Register';
        $this->view('home/templates/master', $data);
        $this->view('home/register', $data);
    }

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function register() {
        if($this->model("UserLogin")->registerUser($_POST) > 0) {
            Flasher::setFlash('Register Berhasil', '', 'success');
            header('Location: '.BASEURL.'reg');
            exit;
        } else {
            Flasher::setFlash('Register Gagal!', '', 'success');
            header('Location: '.BASEURL.'reg');
            exit;
        }
    }

    public function logout() {
        if(session_status() === PHP_SESSION_NONE)
            session_start();

        session_destroy();
        header("Location: ".BASEURL."home");
    }
}
