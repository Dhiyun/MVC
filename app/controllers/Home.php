<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Perkenalan';
        $this->view('home/templates/master', $data);
        $this->view('home/index', $data);
    }
}

?>