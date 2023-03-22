<?php
include 'koneksi.php';
$siswa = read("SELECT * FROM siswa");

if(isset($_POST["cari"])){
    $siswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="css\tampil.css">
</head>
<body>
<h3 align="center">DATA SISWA</h3>
<h4 align="center"><a href="form.php" name="tambah">TAMBAH DATA</a></h4>
<form align="center" action="" method="post">
<input  type="text" name="keyword" id="cari" size="50" autofocus placeholder="cari data siswa" autocomplete="off">
<button type="submit" name="cari" for="cari">cari</button>
</form>
<br>
<br>
<table cellspacing="0" cellpadding="20px" align="center">
        <tr>
            
            <th>Nis</th>
            <th>Action</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>
        <?php $id= 1; ?>
        <?php foreach($siswa as $row): ?>
        <tr > 
            
            <td><?= $id; ?></td>
            <td><a href="hapus.php?id=<?=$row['id']; ?>" onclick="return confirm('yakin?');">Hapus</a> | <a href="ubah.php?id=<?=$row['id']; ?>">Edit</a></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kelas'] ;?></td>
            <td><?= $row['jenkel'] ;?></td>
            <td><?= $row['tanggal_masuk'] ?></td>
            <td><?= $row['alamat'] ;?></td>
        </tr>
        <?php $id++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>