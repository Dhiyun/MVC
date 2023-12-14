<?php

class Admin extends Controller
{
    private function checkRole()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Admin') {
            header("Location: " . BASEURL);
            exit;
        }
    }

    public function index()
    {
        $this->checkRole();
        
        $data['judul'] = 'Admin | Dashboard';
        $modelR = $this->model('RuangM');
        // $modelP = $this->peminjaman('PeminjamanM');
        // $modelH = $this->history('HistoryM');

        $data['r'] = $modelR->getCountRuang();
        // $data['lnt'] = $model->getAllLantai();
        // $data['fsl'] = $model->getAllFasilitas();

        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar');
        $this->view('admin/dashboard/index', $data);
        $this->view('admin/templates/footer');
    }

    public function ruang()
    {
        $this->checkRole();

        $data['judul'] = 'Admin | Ruang';

        $model = $this->model('RuangM');

        $data['rng'] = $model->getAllRuangFasilitas();
        $data['lnt'] = $model->getAllLantai();
        $data['fsl'] = $model->getAllFasilitas();

        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar');
        $this->view('admin/ruang/index', $data);
        $this->view('admin/templates/footer');
    }

    public function dosen()
    {
        $this->checkRole();

        $data['judul'] = 'Admin | Dosen';

        $model = $this->model('DosenM');

        $data['dsn'] = $model->getAllDosen();

        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar');
        $this->view('admin/dosen/index', $data);
        $this->view('admin/templates/footer');
    }

    public function jadwal()
    {
        $this->checkRole();

        $data['judul'] = 'Admin | Jadwal';

        $model = $this->model('JadwalM');

        $data['jdwl'] = $model->getAllJadwal();
        $data['jdwlp'] = $model->getAllJadwalPivot();
        $data['rng'] = $model->getAllRuangan();

        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar');
        $this->view('admin/jadwal/index', $data);
        $this->view('admin/templates/footer');
    }

    public function peminjaman()
    {
        $this->checkRole();

        $data['judul'] = 'Admin | Peminjaman';

        // $model = $this->model('PeminjamanM');

        // $data['jdwl'] = $model->getAllJadwal();
        // $data['jdwlp'] = $model->getAllJadwalPivot();
        // $data['rng'] = $model->getAllRuangan();

        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar');
        $this->view('admin/peminjaman/index', $data);
        $this->view('admin/templates/footer');
    }

    public function history()
    {
        $this->checkRole();

        $data['judul'] = 'Admin | History';

        // $model = $this->model('PeminjamanM');

        // $data['jdwl'] = $model->getAllJadwal();
        // $data['jdwlp'] = $model->getAllJadwalPivot();
        // $data['rng'] = $model->getAllRuangan();

        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar');
        $this->view('admin/peminjaman/index', $data);
        $this->view('admin/templates/footer');
    }
}
?>