<?php
include 'koneksi.php';
$nip = $_GET['nip'];
if ( hapus_guru($nip)> 0 ){
    echo "
        <script>
            alert('Data berhasil di Hapus'); 
            document.location.href = 'tampil_guru.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data Gagal Di Hapus'); 
            document.location.href = 'tampil_guru.php';
        </script>
        ";
}
?>