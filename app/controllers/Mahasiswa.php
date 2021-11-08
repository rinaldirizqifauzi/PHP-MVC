<?php 

class Mahasiswa extends Controller{

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('tamplate/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('tamplate/footer');
    }


}