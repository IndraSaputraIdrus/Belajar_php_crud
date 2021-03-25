<?php

// panggil file functions
require_once 'functions.php';

// panggil function query
$students = queryAllSiswa();
$no = 1;
?>


<?php include 'asset/templates/header.php'; ?>
<div class="container">

  <div class="row my-3">
    <div class="col-md-3">
      <a href="tambah_siswa.php" class="btn btn-primary btn-block">Tambah data</a>
    </div>
  </div>

  <div class="row my-3">
    <div class="col-md-6">
      <h3>Daftar siswa</h3>

      <div class="my-3">
        <ul class="list-group">

          <!-- lakukan looping untuk mengambil data -->
          <?php foreach ($students as $student) : ?>
            <li class="list-group-item">
              <?= $no++; ?>.
              <?= $student['nama']; ?>

              <div class="float-right">
                <!-- arahkan ke halaman detail & kirim kan id ke url -->
                <a href="detail_siswa.php?id=<?= $student['id']; ?>" class="badge badge-success">detail</a>
                <a href="" class="badge badge-primary">edit</a>
                <a href="hapus_siswa.php?id=<?= $student['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin?')">hapus</a>
              </div>
            </li>

          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

</div>
<?php include 'asset/templates/footer.php'; ?>