<?php

class Keunggulan extends Controller{
  
    public function index()
    {
        $data['judul'] = 'Keunggulan Laravel';
        $data['keunggulan_laravel'] = 'Keunggulan Laravel';
        $data['pembukaan'] = $this->model('Keunggulan_model')->getPembukaan();
        $this->view('tamplate/header', $data);
        $this->view('keunggulan/index', $data);
        $this->view('tamplate/footer');
    }
 }
