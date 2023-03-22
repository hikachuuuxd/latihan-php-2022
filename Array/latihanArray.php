<?php
$mahasiswa = [
    ["Nisrina", "0001", "RPL", "@nisrinashofwahfirdaus"],
    ["Hika", "0002", "RPL", "@hikarimizu"]
]; //Ini Array Multidimensi & Array Numerik Yaitu Array index angka
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <h4>DAFTAR MAHASISWA</h4>
   
        <?php foreach($mahasiswa as $mhs): ?>
            <ul>
                <li>Nama :<?= $mhs[0]; ?></li>
                <li>NIS :<?= $mhs[1]; ?></li>
                <li>Jurusan :<?= $mhs[2]; ?></li>
                <li>EMail :<?= $mhs[3]; ?></li>
            </ul> 
        <?php endforeach; ?> 
    
</body>
</html>