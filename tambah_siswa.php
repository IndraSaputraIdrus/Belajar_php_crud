<?php

require 'functions.php';

$conn = koneksi();

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo '<script>
            alert("Data berhasil ditambahkan");
            document.location.href = "daftar_siswa.php";
          </script>';
  } else {
    // echo '<script>
    //         alert("Data gagal ditambahkan");
    //         document.location.href = "daftar_siswa.php";
    //       </script>';
    echo 'gagal';
    echo mysqli_error($conn);
  }
}


?>


<?php include 'asset/templates/header.php'; ?>
<div class="container">

  <div class="row my-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          Form tambah data
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="nama">Nama :</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
            </div>

            <div class="form-group">
              <label for="no_urut">No urut :</label>
              <input type="number" class="form-control" id="no_urut" placeholder="Masukkan no urut" name="no_urut">
            </div>

            <div class="form-group">
              <label for="email">Email :</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan :</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>
                <option value="Administrasi perkantoran">Administrasi perkantoran</option>
                <option value="Perawatan sosial">Perawatan sosial</option>
                <option value="Akuntansi">Akuntansi</option>
              </select>
            </div>

            <div class="form-group">
              <label for="jenis_kelamin">Jenis kelamin :</label>
              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
                  <label class="form-check-label" for="jenis_kelamin">
                    Laki - laki
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="P">
                  <label class="form-check-label" for="jenis_kelamin2">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="gambar">Gambar :</label>
              <img src="asset/img/default.png" alt="profile" class="img-thumbnail d-block mb-3 mx-auto imagePreview" onchange="previewImage()" style="width: 200px; height: 200px;">
              <input type="file" class="form-control-file gambar" id="gambar" name="gambar" onchange="previewImage()">
            </div>
            <button type="submit" name="tambah" class="btn btn-primary btn-block mt-4">Tambah data!</button>
            <a href="daftar_siswa.php" class="btn btn-danger btn-block" onclick="return confirm('yakin?')">Kembali!</a>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include 'asset/templates/footer.php'; ?>