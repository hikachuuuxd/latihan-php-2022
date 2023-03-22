<?php 
 $mahasiswa = [
    ["nama"=>"Nisrina", "nis"=> "0001", "jurusan"=>"RPL", "email"=>"@nisrinashofwahfirdaus"],
    ["nama"=>"Hikari", "nis"=> "0002", "jurusan"=>"RPL", "email"=>"@hikaari"]
 ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array Assosiatif</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama    : <?= $mhs["nama"] ?></li>
        <li>Nis     : <?= $mhs["nis"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        <li>Email   : <?= $mhs["email"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>