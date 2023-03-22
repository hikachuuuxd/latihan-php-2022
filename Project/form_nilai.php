<?php 

include 'koneksi.php';

if(isset($_POST['tekan'])){
    $nis = htmlspecialchars($_POST['nis']);
    $nip = htmlspecialchars($_POST['nip']);
    $nilaiUh = htmlspecialchars($_POST['nilaiUh']);
    $nilaiPraktek = htmlspecialchars($_POST['nilaiPraktek']);
    $nilaiPts = htmlspecialchars($_POST['nilaiPts']);
    $nilaiPas = htmlspecialchars($_POST['nilaiPas']);
    $totalNilai = htmlspecialchars($_POST['totalNilai']);
    $rata = htmlspecialchars($_POST['rata']);

    $tambah = " INSERT INTO nilai VALUES('', '$nilaiUh', '$nilaiPraktek', '$nilaiPts', '$nilaiPas', '$totalNilai', '$rata', '$nis, '$nip') ";
     $query_run = mysqli_query($koneksi, $tambah) or die(mysqli_error($koneksi));

     if($query_run){
        echo "
        <script>
            alert('Data berhasil di tambahkan'); 
            document.location.href = 'tampil_nilai.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data Gagal Ditambahkan'); 
            document.location.href = 'form_nilai.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>  
    <link rel="stylesheet" href="css\form.css"> 
</head>
<body>

    <table  cellspacing="0" cellpadding="13px" >
    <form action="" method="post"  >
    <tr>
        <td class="header"colspan="3"align="center">Form Nilai</td>
    </tr>
    <tr>
        <td class="tanggal" colspan="3" align="center"><?php echo date("l-d-M-Y") ?></td>
    </tr>

    <tr>
        <td><label for="id">Siswa</label></td>
        <td colspan="2" >
        <select name="nis" id="id" width="85px" >
            <option>Siswa</option>
            <?php 
             $siswa = read("SELECT * FROM siswa");
             foreach($siswa as $row): ?>
                <option value=<?= $row['id']?> ><?=  $row['nama'] ?> </option>";
            <?php endforeach;?>
        </select>
        </td>
    </tr>

    <tr>
        <td><label for="nip">Mapel</label></td>
        <td colspan="2">
        <select name="nip" id="nip">
            <option>mapel</option>
            <?php 
             $guru = read("SELECT * FROM guru");
             foreach($guru as $row): ?>
                <option value=<?= $row['nip']?> > <?=  $row['mapel'] ?> </option>";
            <?php endforeach;?>
        </select>
        </td>
    </tr>
    
    

    <tr>
        <td><label for="nilaiUh">UH</label></td>
        <td colspan="2"><input type="number" autocomplete="off" name="nilaiUh" id="nilaiUh" required size="15" ></td>
    </tr>
    <tr>
        <td><label for="nilaiPraktek">Praktek</label></td>
        <td colspan="2"><input type="number" autocomplete="off" name="nilaiPraktek" id="nilaiPraktek" required size="15" ></td>
    </tr>
    <tr>
        <td><label for="nilaiPts">PTS</label></td>
        <td colspan="2"><input type="number" autocomplete="off" name="nilaiPts" id="nilaiPts" required size="15" ></td>
    </tr>
    <tr>
        <td><label for="nilaiPas">PAS</label></td>
        <td colspan="2"><input type="number" autocomplete="off" name="nilaiPas" id="nilaiPas" required size="15" ></td>
    </tr>
    <tr>
        <td><label for="totalNilai">Total</label></td>
        <?php
        if(isset($_POST['total']) ):
            $nilaiUh = $_POST['nilaiUh'];
            $nilaiPraktek = $_POST['nilaiPraktek'];
            $nilaiPts = $_POST['nilaiPts'];
            $nilaiPas = $_POST['nilaiPas'];

            $hasil = total($nilaiUh, $nilaiPraktek, $nilaiPts, $nilaiPas);
        ?>
        <td><input type="number"  autocomplete="off" name="totalNilai" id="totalNilai"  size="15" value = "<?= $hasil;?>" readonly></td>
        <?php endif ?>
        <td height="50px" align="center" width="180px"><button type="submit" name="total" >hitung</button></td>
    </tr>

    <tr>
        <td><label for="rata">Rata-rata</label></td>
        
        <?php
        if(isset($_POST['rata']) ):
            $nilaiUh = $_POST['nilaiUh'];
            $nilaiPraktek = $_POST['nilaiPraktek'];
            $nilaiPts = $_POST['nilaiPts'];
            $nilaiPas = $_POST['nilaiPas'];

            $hasil = rata($nilaiUh, $nilaiPraktek, $nilaiPts, $nilaiPas);
            
        ?>
        <td><input type="number"  autocomplete="off" name="rata" id="rata" value="<?= $hasil?>" readonly size="15" ></td>
        <?php endif;?>
        <td height="50px" align="center" width="180px"><button type="submit"  name="rata">hitung</button></td>
    </tr>

    <tr>
        <td align="center" colspan="3" height="50px"><button type="submit" name="tekan">SIMPAN</button></td>
    </tr>
    </form>
    </table>

</body>
</html>


