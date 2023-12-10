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
        $this->view('user/dashboard/index', $data);
        $this->view('user/templates/footer');
    }

    public function ruang()
    {
        $this->checkRole();

        $data['judul'] = 'Ruang';

        $model = $this->model('RuangM');

        $data['rng'] = $model->getAllRuangFasilitas();
        $data['lnt'] = $model->getAllLantai();
        $data['fsl'] = $model->getAllFasilitas();

        $this->view('user/templates/navbar');
        $this->view('user/ruang/index', $data);
        $this->view('user/templates/footer');
    }

    public function jadwal()
    {
        $this->checkRole();

        $data['judul'] = 'Admin | Jadwal';

        $model = $this->model('JadwalM');

        $data['jdwl'] = $model->getAllJadwal();
        $data['jdwlp'] = $model->getAllJadwalPivot();
        $data['rng'] = $model->getAllRuangan();

        $this->view('admin/templates/header');
        $this->view('admin/templates/sidebar');
        $this->view('admin/jadwal/index', $data);
        $this->view('admin/templates/footer');
    }
}
