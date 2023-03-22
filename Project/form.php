<?php 

include 'koneksi.php';

if(isset($_POST['tekan'])){
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $jenkel = htmlspecialchars($_POST["jenkel"]);
    $tanggal_masuk = date('Y-m-d', strtotime($_POST['tanggal_masuk']));
    $alamat = htmlspecialchars($_POST["alamat"]);
    

    $tambah = " INSERT INTO siswa VALUES('', '$nama', '$kelas', '$jenkel', '$tanggal_masuk', '$alamat') ";
     $query_run = mysqli_query($koneksi, $tambah);

     if($query_run){
        echo "
        <script>
            alert('Data berhasil di tambahkan'); 
            document.location.href = 'index.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data Gagal Ditambahkan'); 
            document.location.href = 'form.php';
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

    <table  cellspacing="0" cellpadding="13px">
    <form action="" method="post">
    <tr>
        <td class="header"colspan="3"align="center">Form Siswa</td>
    </tr>
    <tr>
        <td class="tanggal" colspan="3" align="center"><?php echo date("l-d-M-Y") ?></td>
    </tr>
    <tr>
        <td><label for="id">Nis</label></td>
        <td colspan="2"><input type="text" name="id" id="id" ></td>
    </tr>

    <tr>
        <td><label for="nama">Nama</label></td>
        <td colspan="2"><input type="text" autocomplete="off" name="nama" id="nama" required size="30" ></td>
    </tr>
    <tr>
        <td><label for="kelas">Kelas</label></td>
        <td colspan="2"><input type="text" autocomplete="off" name="kelas" id="kelas" required size="30" ></td>
    </tr>
    <tr>
        <td><label for="jenkel">Jenis Kelamin</label></td>
        <td> <input type="radio" name="jenkel" value= "laki-laki" id="jenkel"> Laki-Laki</td>
        <td> <input type="radio" name="jenkel" value= "perempuan" id="jenkel"> Perempuan</td>
    </tr>
    <tr>
        <td><label for="tanggal_masuk">Tanggal Lahir</label></td>
        <td colspan="2"><input type="date" name="tanggal_masuk" id="tanggal_masuk" required></td>
    </tr>
    <tr>
        <td><label for="alamat">Alamat</label></td>
        <td colspan="2"><textarea name="alamat" id="alamat" cols="30" rows="10" required></textarea></td>
    </tr>
    <tr>
        <td align="center" colspan="3" height="50px"><button type="submit" name="tekan">SIMPAN</button></td>
    </tr>
    </form>
    </table>

</body>
</html>