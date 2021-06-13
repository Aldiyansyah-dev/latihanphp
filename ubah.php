<?php 

  require 'functions.php';

  // Jika tidak ada ID di URL
  if (!isset($_GET['id'])) {
      header("Location: index.php");
      exit;
  }

  // ambil id dari URL
    $id = $_GET['id'];

// query mahasiswa berdasarkan ID
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

  // cek apakah tombol uab sudah ditekan
  if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
      echo "<script>
              alert('Data Berhasil Diubah');
              document.location.href = 'index.php';
            </script>";
    } else {
      echo "Data Gagal Diubah!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ubah Data Mahasiswa</title>
  </head>
  <body>
    <h3>Form Ubah Mahasiswa</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
      <ul>
        <li>
          <label>
            Nama :
            <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
          </label>
        </li>
        <li>
          <label>
            NRP :
            <input type="text" name="nrp" required value="<?= $mhs['nrp']; ?>">
          </label>
        </li>
        <li>
          <label>
            Email :
            <input type="text" name="email" required value="<?= $mhs['email']; ?>">
          </label>
        </li>
        <li>
          <label>
            Jurusan :
            <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>"> 
          </label>
        </li>
        <li>
          <label>
            Gambar
            <input type="text" name="gambar" required value="<?= $mhs['gambar']; ?>">
          </label>
        </li>
        <li>
          <button type="submit" name="ubah">Ubah Data</button>
        </li>
      </ul>
    </form>
  </body>
</html>
