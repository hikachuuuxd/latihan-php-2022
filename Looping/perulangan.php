<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <p>Perulangan While di JavaScript</p>
    <script src="while.js"></script>
    <br>
</body>
</html>

<?php

echo "Perulangan for di PHP <br>";

for($i = 0; $i < 5; $i++) //$i = Inisialisasi
{
    echo $i.". Ini Menggunakan For <br>";
}


echo "<br> Perulangan while di PHP <br>";

// Inisialisasi diluar while
$nilai = 1;
while ($nilai<=5) {
    echo $nilai.". Ini Menggunakan WHile <br>";
    $nilai++;
}

echo "<br> Perulangan Do WHile di PHP <br>";
$nilaiAwal = 1;
do {
    echo $nilaiAwal.". Ini adalah Perulangan While <br>";
    $nilaiAwal++;
} while ($nilaiAwal <=5);
?>