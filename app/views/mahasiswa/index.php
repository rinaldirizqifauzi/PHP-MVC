<div class="container mt-3">
    <h1><center> Daftar Mahasiswa </center> </h1><br>
    <div class="row">
        <?php foreach ( $data['mahasiswa'] as $mhs ) : ?>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $mhs['nama'] ?></h5>
                    <h6 class="card-subtitle mb-4 text-muted">NPM : <?= $mhs['npm'] ?></h6>
                    <p class="card-text mb-1">Jurusan : <?= $mhs['jurusan'] ?></p>
                    <p class="card-text mb-1">Kelas : <?= $mhs['Kelas'] ?></p>
                    <p class="card-text mb-1">Semester : <?= $mhs['Semester'] ?></p>
                    <p class="card-text mb-1">Mata Kuliah : <?= $mhs['Mata_Kuliah'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>