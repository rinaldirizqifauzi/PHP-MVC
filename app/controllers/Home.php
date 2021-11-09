<?php

class Home extends Controller {

    public function index()
    {
        
        $data['pengertian_laravel'] = 'Pengertian Laravel';
        $data['keunggulan_laravel'] = 'Keunggulan Laravel';
        $data['excerpt'] = 'Dilansir dari Updivision, Laravel adalah framework yang akan membantumu dalam memaksimalkan penggunaan PHP dalam proses pengembangan website.';
        $data['excerpt_keunggulan'] = 'Laravel adalah framework aplikasi web kontemporer, open source dan digunakan secara luas untuk perancangan aplikasi web yang cepat dan mudah.Laravel dibuat oleh Taylor Otwell pada tahun 2011';
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