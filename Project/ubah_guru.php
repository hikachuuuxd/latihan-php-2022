<?php 

include 'koneksi.php';

$nip  = $_GET['nip']; 
$guru = read("SELECT * FROM guru WHERE nip = $nip")[0];
if(isset($_POST['tekan'])){

     if(ubahGuru($_POST)>0){
        echo "
        <script>
            alert('Data berhasil di Ubah'); 
            document.location.href = 'tampil_guru.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data Gagal di Ubah'); 
            document.location.href = 'tampil_guru.php';
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
    
    <table cellspacing="0" cellpadding="13px">
    <form action="" method="post">
    <tr>
        <td class="header"colspan="2"align="center">Form guru</td>
    </tr>
    <tr>
        <td class="tanggal" colspan="2" align="center"><?php echo date("l-d-M-Y") ?></td>
    </tr>
    <tr>
        <td><label for="nip">Nip</label></td>
        <td colspan="2"><input type="hidden" name="nip" id="nip" height="50px" required value="<?=$guru['nip'];?>"></td>
    </tr>
    <tr>
        <td><label for="nama_guru">Nama</label></td>
        <td colspan="2"><input type="text" name="nama_guru" autocomplete="off" id="nama_guru"  required size="30" value="<?=$guru['nama_guru'];?>"></td>
    </tr>
    <tr>
        <td><label for="mapel">Mapel</label></td>
        <td colspan="2"><input type="text" name="mapel" autocomplete="off" id="mapel" required size="30" value="<?=$guru['mapel'];?>"></td>
    </tr>
    <tr>
        <td colspan="2" height="50px" align="center"><button type="submit" name="tekan">UBAH</button></td>
    </tr>
       
    </form>
    </table>
   

</body>
</html>