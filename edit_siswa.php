<?php

require 'functions.php';

$id = $_GET['id'];

$student = queryById($id);

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo '<script>
            alert("Data berhasil diubah");
            document.location.href = "daftar_siswa.php";
          </script>';
  } else {
    echo '<script>
            alert("Data gagal diubah");
            document.location.href = "daftar_siswa.php";
          </script>';
  }
}


?>


<?php include 'asset/templates/header.php'; ?>
<div class="container">

  <div class="row my-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          Form ubah data
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $student['id']; ?>">
            <div class="form-group">
              <label for="nama">Nama :</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="<?= $student['nama']; ?>">
            </div>

            <div class="form-group">
              <label for="no_urut">No urut :</label>
              <input type="number" class="form-control" id="no_urut" placeholder="Masukkan no urut" name="no_urut" value="<?= $student['no_urut']; ?>">
            </div>

            <div class="form-group">
              <label for="email">Email :</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" value="<?= $student['email']; ?>">
            </div>

            <!-- pengkondisian menggunakan ternary operator -->
            <div class="form-group">
              <label for="jurusan">Jurusan :</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option <?= $student['jurusan'] == 'Rekayasa perangkat lunak' ? 'selected' : ''; ?> value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>

                <option <?= $student['jurusan'] == 'Administrasi perkantoran' ? 'selected' : ''; ?> value="Administrasi perkantoran">Administrasi perkantoran</option>

                <option <?= $student['jurusan'] == 'Perawatan sosial' ? 'selected' : ''; ?> value="Perawatan sosial">Perawatan sosial</option>

                <option <?= $student['jurusan'] == 'Akuntansi' ? 'selected' : ''; ?> value="Akuntansi">Akuntansi</option>
              </select>
            </div>

            <!-- pengkondisian menggunakan ternary operator -->
            <div class="form-group">
              <label for="jenis_kelamin">Jenis kelamin :</label>
              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input <?= $student['jenis_kelamin'] == 'L' ? 'checked' : ''; ?> class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
                  <label class="form-check-label" for="jenis_kelamin">
                    Laki - laki
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input <?= $student['jenis_kelamin'] == 'P' ? 'checked' : ''; ?> class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                  <label class="form-check-label" for="jenis_kelamin2">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>

            <input type="hidden" name="gambar" value="<?= $student['gambar']; ?>">
            <button type="submit" name="ubah" class="btn btn-primary btn-block">Ubah data!</button>

            <a href="daftar_siswa.php" class="btn btn-danger btn-block">Kembali!</a>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include 'asset/templates/footer.php'; ?>