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
  <div class="container">
    <div class="row justify-content-center mt-4">
      <h4><center> Laravel 8 </center></h4>
      <div class="col-lg-6">
        <div class="card w-75">
          <div class="card-body">
            <h5 class="card-title"><?= $data['pengertian_laravel'] ?></h5>
            <p class="card-text"><?= $data['excerpt'] ?></p>
            <a href="<?= BASEURL; ?>/laravel" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card w-75">
          <div class="card-body">
            <h5 class="card-title"><?= $data['keunggulan_laravel'] ?></h5>
            <p class="card-text"><?= $data['excerpt_keunggulan'] ?></p>
            <a href="<?= BASEURL; ?>/keunggulan" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>