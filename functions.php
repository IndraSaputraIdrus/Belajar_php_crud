<?php

function koneksi()
{
  // menampung atribut untuk koneksi ke dalam varibel
  $db_server  = 'localhost';
  $db_user = 'root';
  $db_pass = '';
  $db_name = 'Quince_TIK';

  // melakukan koneksi & mengembalikan data nya
  return mysqli_connect($db_server, $db_user, $db_pass, $db_name);
}

function query($query)
{
  // menampung function koneksi ke dalam variabel
  $conn = koneksi();

  // melakukan query ke database
  $result = mysqli_query($conn, $query);

  // jika data yang dibutuhkan cuman 1 baris saja / 1 data 
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // mengambil data dari database
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
