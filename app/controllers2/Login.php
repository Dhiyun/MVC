<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Introduce';
        $this->view('home/login');
    }
}

?>