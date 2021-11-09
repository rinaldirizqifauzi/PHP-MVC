<div class="container mt-3">
    <h1><center> <?= $data['judul'] ?> </center> </h1><br>
    <div class="row">
        <?php foreach ( $data['pembukaan'] as $pembukaan ) : ?>
                <p><?= $pembukaan['keunggulan'] ?></p>
        <?php endforeach; ?>
    </div>
</div>