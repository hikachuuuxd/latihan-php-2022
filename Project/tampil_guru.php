<?php
include 'koneksi.php';
$guru = read("SELECT * FROM guru");

if(isset($_POST["cari"])){
    $guru = cari_guru($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <link rel="stylesheet" href="css\tampil.css">
</head>
<body>
<h3 align="center">DATA GURU</h3>
<h4 align="center"><a href="form_guru.php" name="tambah">TAMBAH DATA</a></h4>
<form align="center" action="" method="post">
<input  type="text" name="keyword" id="cari" size="50" autofocus placeholder="cari data guru" autocomplete="off">
<button type="submit" name="cari" for="cari">cari</button>
</form>
<br>
<br>
<table cellspacing="0" cellpadding="20px" align="center">
        <tr>
            
            <th>Nip</th>
            <th>Action</th>
            <th>Nama</th>
            <th>Mapel</th>
        </tr>
        <?php $id= 1; ?>
        <?php foreach($guru as $row): ?>
        <tr > 
            
            <td><?= $id; ?></td>
            <td><a href="hapus_guru.php?nip=<?=$row['nip']; ?>" onclick="return confirm('yakin?');">Hapus</a> | <a href="ubah_guru.php?nip=<?=$row['nip']; ?>">Edit</a></td>
            <td><?= $row['nama_guru']; ?></td>
            <td><?= $row['mapel'] ;?></td>
        </tr>
        <?php $id++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>