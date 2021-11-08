<?php

class About extends Controller {

    public function index($nama = 'Franco', $role = 'Tank', $umur = 32)
    {

        $data['nama'] = $nama;
        $data['role'] = $role;
        $data['umur'] = $umur;
        $data['judul'] = 'About';

        $this->view('tamplate/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplate/footer');
    }
    
    public function page()
    {
        $this->view('about/page');
    }
}