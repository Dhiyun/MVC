<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Introduce';
        $this->view('home/index', $data);
    }
}

?>