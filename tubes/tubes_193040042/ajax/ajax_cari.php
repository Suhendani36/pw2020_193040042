<?php


require '../php/function.php';
$makanan = cari($_GET['keyword']);
?>

<div class="row pt-5">
  <?php if (empty($makanan)) : ?>
    <h1>Makanan Tidak Tersedia</h1>
  <?php endif; ?>
  <?php foreach ($makanan as $mkn) : ?>
    <div class="col-sm-3 mb-3">
      <div class="card mt-3">
        <img src="../assets/img/<?= $mkn['gambar']; ?> " class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?= $mkn['nama']; ?></h5>
          <a href="detail2.php?id=<?= $mkn['id']; ?>" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>