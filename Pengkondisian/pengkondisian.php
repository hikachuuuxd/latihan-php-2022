<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <p>Dalam PHP terdapat 4 pengkondisian</p>
    
    <p>1. If Else</p>
    <p>2. If else If else</p>
    <p>3. Ternary</p>
    <p>4. Switch</p>

    <h4>If Else</h4>
        <?php 
            $nilai1 =50;
            if($nilai1>=80){
             echo"Selamat Anda Lulus";
             } else{
            echo "Maaf Anda Tidak Lulus";
            }
         ?>
    
    <h4>IF Else IF Else</h4>
    <?php 
    $nilaiA = 50;
    if($nilaiA>=80){
        echo "Selamat Anda Lulus";
    } else if($nilaiA>=50){
        echo"Selamat Anda Mendapat kesempatan Kedua";
    } else{
        echo"Silahkan Mencoba Lagi, jangan Menyerah;";
    }
    ?>

</body>
</html>