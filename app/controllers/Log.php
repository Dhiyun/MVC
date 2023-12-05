<?php

include '../app/fungsi/pesan_kilat.php';

class Log extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('home/login', $data);
    }

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data['login'] = $this->model('UserLogin')->getUser($username, $password);
        session_start();
        if ($data['login'] == NULL) {
            pesan('danger', "Login gagal. Periksa kembali username dan password.");
            header("Location:" . BASEURL . "log");
        } else {
            foreach ($data['login'] as $row) {
                if ($row['password'] === md5($password)) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['role'];
                    if ($row['role'] === "User") {
                        header("Location: user/");
                    } else if ($row['role'] === "Admin") {
                        header("Location: " . BASEURL . "admin/dashboard");
                    } else {
                        pesan('danger', "User tidak di temukan");
                        header("Location: log");
                    }
                } else {
                    pesan('danger', "Login gagal. Periksa kembali username dan password.");
                    header("Location: log");
                }
            }
        }
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE)
            session_start();

        session_destroy();
        header("Location: " . BASEURL . "home");
    }
}
