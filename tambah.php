<?php 
  session_start();

  if (!isset($_SESSION['login'])) {
      header ("Location: login.php");
      exit;
  }
  
  require 'functions.php';

  // cek apakah tombol tambah sudah ditekan
  if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
      echo "<script>
              alert('Data Berhasil Ditambahkan');
              document.location.href = 'index.php';
            </script>";
    } else {
      echo "Data Gagal Ditambahkan!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
    <h3>Form Tambah Mahasiswa</h3>
    <form action="" method="POST">
      <ul>
        <li>
          <label>
            Nama :
            <input type="text" name="nama" autofocus required>
          </label>
        </li>
        <li>
          <label>
            NRP :
            <input type="text" name="nrp" required>
          </label>
        </li>
        <li>
          <label>
            Email :
            <input type="text" name="email" required>
          </label>
        </li>
        <li>
          <label>
            Jurusan :
            <input type="text" name="jurusan" required>
          </label>
        </li>
        <li>
          <label>
            Gambar
            <input type="text" name="gambar" required>
          </label>
        </li>
        <li>
          <button type="submit" name="tambah">Tambah Data</button>
        </li>
      </ul>
    </form>
  </body>
</html>
