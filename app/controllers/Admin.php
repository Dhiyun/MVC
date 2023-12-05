<?php

class Admin extends Controller
{
    public function setActivePage($page)
    {
        $this->activePage = $page;
    }

    public function getActivePage()
    {
        return $this->activePage;
    }
    
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('admin/templates/header');
        $this->view('admin/templates/sidebar');
        $this->view('admin/dashboard/index', $data);
        $this->view('admin/templates/footer');
    }

    public function ruang()
    {
        $data['judul'] = 'Ruang';
        $model = $this->model('RuangM');
        $data['rng'] = $model->getAllRuang();
        $data['lnt'] = $model->getAllLantai();
        $data['fsl'] = $model->getAllFasilitas();
        $this->view('admin/templates/header');
        $this->view('admin/templates/sidebar');
        $this->view('admin/ruang/index', $data);
        $this->view('admin/templates/footer');
    }
}
?>
