<?php 

include 'koneksi.php';

$id  = $_GET['id']; 
$siswa = read("SELECT * FROM siswa WHERE id = $id")[0];
if(isset($_POST['tekan'])){

     if(ubah($_POST)>0){
        echo "
        <script>
            alert('Data berhasil di Ubah'); 
            document.location.href = 'index.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data Gagal di Ubah'); 
            document.location.href = 'index.php';
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
        <td class="header"colspan="3"align="center">Form Siswa</td>
    </tr>
    <tr>
        <td class="tanggal" colspan="3" align="center"><?php echo date("l-d-M-Y") ?></td>
    </tr>
    <tr>
        <td><label for="id">Nis</label></td>
        <td colspan="2"><input type="hidden" name="id" id="id" height="50px" required value="<?=$siswa['id'];?>"></td>
    </tr>
    <tr>
        <td><label for="nama">Nama</label></td>
        <td colspan="2"><input type="text" name="nama" autocomplete="off" id="nama"  required size="30" value="<?=$siswa['nama'];?>"></td>
    </tr>
    <tr>
        <td><label for="kelas">Kelas</label></td>
        <td colspan="2"><input type="text" name="kelas" autocomplete="off" id="kelas" required size="30" value="<?=$siswa['kelas'];?>"></td>
    </tr>
    <tr>
        <td><label for="jenkel">Jenis Kelamin</label></td>
        <td> <input type="radio" name="jenkel" value="laki-laki" <?php if($siswa['jenkel']=="laki-laki") echo 'checked'?> id="jenkel"> Laki-Laki</td>
        <td> <input type="radio" name="jenkel" value="perempuan"  <?php if($siswa['jenkel']=="perempuan") echo 'checked'?>> Perempuan</td>
    </tr>
    <tr>
        <td><label for="tanggal_masuk">Tanggal Lahir</label></td>
        <td colspan="2"><input type="date" name="tanggal_masuk" id="tanggal_masuk" required value="<?=$siswa['tanggal_masuk'];?>"></td>
    </tr>
    <tr>
        <td><label for="alamat">Alamat</label></td>
        <td colspan="2"><textarea name="alamat" id="alamat" cols="30" rows="10" required><?=$siswa['alamat'];?></textarea></td>
    </tr>
    <tr>
        <td colspan="3" height="50px" align="center"><button type="submit" name="tekan">UBAH</button></td>
    </tr>
       
    </form>
    </table>
   

</body>
</html>