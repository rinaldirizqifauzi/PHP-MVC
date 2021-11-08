<?php

class Home extends Controller {

    public function index()
    {

        $data['judul'] = 'Home';
        $data['matakuliah'] = $this->model('User_model')->getMataKuliah();
        $data['nama'] = $this->model('User_model')->getNama();
        $data['kelas'] = $this->model('User_model')->getKelas();
        $data['npm'] = $this->model('User_model')->getNpm();
        $data['semester'] = $this->model('User_model')->getSemester();
        $data['jurusan'] = $this->model('User_model')->getJurusan();
        $data['tugas'] = $this->model('User_model')->getTugas();
        $this->view('tamplate/header', $data);
        $this->view('home/index', $data);
        $this->view('tamplate/footer');
    }
}