<?php 

include 'koneksi.php';

if(isset($_POST['tekan'])){
    $nama = htmlspecialchars($_POST['nama_guru']);
    $mapel = htmlspecialchars($_POST['mapel']);
    
    

    $tambah = " INSERT INTO guru VALUES('', '$nama', '$mapel') ";
     $query_run = mysqli_query($koneksi, $tambah);

     if($query_run){
        echo "
        <script>
            alert('Data berhasil di tambahkan'); 
            document.location.href = 'tampil_guru.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data Gagal Ditambahkan'); 
            document.location.href = 'form_guru.php';
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
        <td class="header"colspan="2"align="center">Form Guru</td>
    </tr>
    <tr>
        <td class="tanggal" colspan="2" align="center"><?php echo date("l-d-M-Y") ?></td>
    </tr>
    <tr>
        <td><label for="id">Nip</label></td>
        <td colspan="2"><input type="text" name="id" id="id" ></td>
    </tr>

    <tr>
        <td><label for="nama_guru">Nama</label></td>
        <td colspan="2"><input type="text" autocomplete="off" name="nama_guru" id="nama_guru" required size="30" ></td>
    </tr>
    <tr>
        <td><label for="mapel">Mapel</label></td>
        <td colspan="2"><input type="text" autocomplete="off" name="mapel" id="mapel" required size="30" ></td>
    </tr>
    <tr>
        <td align="center" colspan="2"  height="50px"><button type="submit" name="tekan">SIMPAN</button></td>
    </tr>
    </form>
    </table>

</body>
</html>