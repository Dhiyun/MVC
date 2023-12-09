<?php

class User extends Controller {
    private function checkRole()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'User') {
            header("Location: " . BASEURL);
            exit;
        }
    }

    public function index() {
        $this->checkRole();
                
        $data['judul'] = 'Home';

        $this->view('user/templates/navbar');
        $this->view('user/index', $data);
        $this->view('user/templates/footer');
    }
}