<?php

class Laravel extends Controller {

    public function index()
    {
        $data['pengertian'] = $this->model('Pengertian_model')->getPengertianLaravel();
        $this->view('tamplate/header', $data);
        $this->view('pengertian/index', $data);
        $this->view('tamplate/footer');
    }
}