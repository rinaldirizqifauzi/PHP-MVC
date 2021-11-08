<?php 

class User_model {
    private $matakuliah = 'Pemograman Web II';
    private $nama = 'Rinaldi Rizqi Fauzi';
    private $kelas = 'MI 1 (Siang)';
    private $npm = '1910404857011';
    private $semester = 'V (Lima)';
    private $jurusan = 'Informatika';
    private $tugas = 'PHP MVC';

    public function getMataKuliah()
    {
        return $this->matakuliah;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getKelas()
    {
        return $this->kelas;
    }

    public function getNpm()
    {
        return $this->npm;
    }

    public function getSemester()
    {
        return $this->semester;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function getTugas()
    {
        return $this->tugas;
    }
}