<?php

class User extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $this->view('user/templates/navbar');
        $this->view('user/index', $data);
        $this->view('user/templates/footer');
    }
}