<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header');
        $this->view('home/index', $data);
    }
    
    // public function register()
    // {
    //     $this->view('home/register');
    // }
}

?>