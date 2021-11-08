<?php 

class Mahasiswa_model {
    private $mahasiswa = [
        [
            "nama" => "Mahasiswa 1",
            "npm" => "1910404857011",
            "jurusan" => "Informatika",
            "Kelas" => "MI 1 (Siang)",
            "Semester" => "5 (Ganjil)",
            "Mata_Kuliah" => "Pemograman Web",
        ],
        [
            "nama" => "Mahasiswa 2",
            "npm" => "1910404857011",
            "jurusan" => "Informatika",
            "Kelas" => "MI 1 (Siang)",
            "Semester" => "5 (Ganjil)",
            "Mata_Kuliah" => "Pemograman Mobile",
        ],
        [
            "nama" => "Mahasiswa 3",
            "npm" => "1910404857011",
            "jurusan" => "Informatika",
            "Kelas" => "MI 1 (Siang)",
            "Semester" => "5 (Ganjil)",
            "Mata_Kuliah" => "Sistem Penunjang Keputusan",
        ],
    ];


    public function getAllMahasiswa()
    {
        return $this->mahasiswa;
    }

}