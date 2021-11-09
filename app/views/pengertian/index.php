<div class="container mt-3">
    <h1><center> Pengertian Laravel </center> </h1><br>
    <div class="row">
        <?php foreach ( $data['pengertian'] as $pengertian ) : ?>
                <p><?= $pengertian['pengertian'] ?></p>
        <?php endforeach; ?>
    </div>
</div>