<?php

// panggil file functions
require_once 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// query data berdasarkan id
$student = queryById($id);

?>

<?php include 'asset/templates/header.php'; ?>
<div class="container">

  <!-- card -->
  <div class="card my-5">
    <h5 class="card-header">Detail siswa</h5>
    <div class="card-body">
      <div class="row">

        <div class="col-md-3">
          <img class="rounded-circle" width="100%" src="asset/img/<?= $student["gambar"]; ?>">
        </div>

        <div class="col-md-9 mt-3">
          <table>
            <tr>
              <td>
                <h3>No urut</h3>
              </td>
              <td>
                <h3 class="mx-3">:</h3>
              </td>
              <td>
                <h3><?= $student['no_urut']; ?></h3>
              </td>
            </tr>
            <tr>
              <td>
                <h3>Nama</h3>
              </td>
              <td>
                <h3 class="mx-3">:</h3>
              </td>
              <td>
                <h3><?= $student['nama']; ?></h3>
              </td>
            </tr>
            <tr>
              <td>
                <h3>Email</h3>
              </td>
              <td>
                <h3 class="mx-3">:</h3>
              </td>
              <td>
                <h3><?= $student['email']; ?></h3>
              </td>
            </tr>
            <tr>
              <td>
                <h3>Jurusan</h3>
              </td>
              <td>
                <h3 class="mx-3">:</h3>
              </td>
              <td>
                <h3><?= $student['jurusan']; ?></h3>
              </td>
            </tr>
            <tr>
              <td>
                <h3>Jenis kelamin</h3>
              </td>
              <td>
                <h3 class="mx-3">:</h3>
              </td>
              <td>
                <h3><?= $student['jenis_kelamin']; ?></h3>
              </td>
            </tr>
          </table>
        </div>

      </div>


      <a href="daftar_siswa.php" class="float-right btn btn-primary mt-4">Kembali</a>

    </div>
  </div>

</div>


<?php include 'asset/templates/footer.php'; ?>