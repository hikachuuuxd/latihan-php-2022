<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <h4>Fungsi Date(Tanggal)</h4>
    <?php 
        echo date("l, d-M-y"); //Membutuhkan minimal satu parameter
    ?>
    <h4>Fungsi Time</h4>
        <?php echo time(); ?>
        <h4>Mengetahui 100 hari dari sekarang</h4>
        <?php echo date("d-M-Y", time()-60*60*24*1000); ?>
        <h4>Mengecek Hari lahir kita fungsi mktime</h4>
        <?php echo date("l, d-M-Y", mktime(0,0,0,11,11,2004));  
        //   mktime terdapat 6 parameter berfungsi untuk mencari deeetik yang kita inginkan
        // mktime(0,0,0,0,0,0) jam, menit, detik, bulan, tanggal tahun ?> 
</body>
</html>