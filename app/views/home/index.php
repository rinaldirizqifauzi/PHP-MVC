<div class="container">
<div class="card bg-dark text-white">
    <img src="<?= BASEURL; ?>/img/home.jpg" class="img-fluid" alt="Home">
  <div class="card-img-overlay">
    <h1 class="card-title"><center> <?= $data['matakuliah'] ?></center></h1> <br><br> 
    <div class="row">
        <div class="col-lg-6">
          
        </div>
        <div class="col-lg-6">
            <h2><?= $data['tugas'] ?></h2><br>
            <h4>Nama => <?= $data['nama'] ?></h4>
            <h4>Npm => <?= $data['npm'] ?></h4>
            <h4>Jurusan => <?= $data['jurusan'] ?></h4>
            <h4>Kelas => <?= $data['kelas'] ?></h4>
            <h4>Semester => <?= $data['semester'] ?></h4>
        </div>
    </div>
  </div>
</div>

    
</div>