<?php
include 'koneksi.php';
$nilai = read("SELECT siswa.id, guru.nip, nilai.nilaiUh, nilai.nilaiPraktek, nilai.nilaiPts, nilai.nilaiPas,
                nilai.totalNilai, nilai.rata FROM nilai INNER JOIN siswa ON 
                nilai.nis = siswa.id INNER JOIN guru ON nilai.nip = guru.nip");

if(isset($_POST["cari"])){
    $nilai = cari_guru($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai</title>
    <link rel="stylesheet" href="css\tampil.css">
</head>
<body>
<h3 align="center">DATA Nilai</h3>
<h4 align="center"><a href="form_guru.php" name="tambah">TAMBAH DATA</a></h4>
<form align="center" action="" method="post">
<input  type="text" name="keyword" id="cari" size="50" autofocus placeholder="cari data guru" autocomplete="off">
<button type="submit" name="cari" for="cari">cari</button>
</form>
<br>
<br>
<table cellspacing="0" cellpadding="20px" align="center">
        <tr>
            
            <th>Kd Mapel</th>
            <th>Action</th>
            <th>NIS</th>
            <th>NIP</th>
            <th>UH</th>
            <th>Praktek</th>
            <th>PTS</th>
            <th>PAS</th>
            <th>Total</th>
            <th>Rata-Rata</th>
         

       
        </tr>
        <?php $id= 1; ?>
        <?php foreach($nilai as $row): ?>
        <tr > 
            
            <td><?= $id; ?></td>
            <td><a href="hapus_guru.php?nip=<?=$row['nip']; ?>" onclick="return confirm('yakin?');">Hapus</a> | <a href="ubah_guru.php?nip=<?=$row['nip']; ?>">Edit</a></td>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nip'] ;?></td>
            <td><?= $row['nilaiUh'] ;?></td>
            <td><?= $row['nilaiPraktek'] ;?></td>
            <td><?= $row['nilaiPts'] ;?></td>
            <td><?= $row['nilaiPas'] ;?></td>
            <td><?= $row['totalNilai'] ;?></td>
            <td><?= $row['rata'] ;?></td>

        </tr>
        <?php $id++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>