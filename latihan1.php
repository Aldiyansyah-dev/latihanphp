<?php 
// Koneksi ke DB & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');

// Query isi tabel Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array
$rows =[];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// tampung data ke variabel mahasiswa
$mahasiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1;
     foreach($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><img src="image/<?= $mhs['gambar']; ?>" width="100"  height="80"></td>
        <td><?= $mhs['nrp']; ?></td> 
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td>
            <a href="">Update</a> | <a href="">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>