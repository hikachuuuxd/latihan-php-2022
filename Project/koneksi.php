<?php
$koneksi = mysqli_connect("localhost", "root", "", "percobaan");

function read($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    } return $rows;
} 

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $jenkel = htmlspecialchars($data["jenkel"]);
    $tanggal_masuk = date('Y-m-d', strtotime($data['tanggal_masuk']));
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE siswa SET nama = '$nama',
                kelas = '$kelas',
                jenkel = '$jenkel',
                tanggal_masuk = '$tanggal_masuk',
                alamat = '$alamat'
                WHERE id = $id
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
    $query = " SELECT * FROM siswa 
                WHERE 
                nama LIKE '%$keyword%' OR
                kelas LIKE '%$keyword%' OR
                jenkel LIKE '%$keyword%' OR
                tanggal_masuk LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%'    
    ";
    return read($query);
}

function hapus_guru($nip){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM guru WHERE nip = $nip");
    return mysqli_affected_rows($koneksi);
}

function ubahGuru($data){
    global $koneksi;

    $nip = $data['nip'];
    $nama = htmlspecialchars($data['nama_guru']);
    $mapel = htmlspecialchars($data['mapel']);
    
    $query = "UPDATE guru SET nama_guru = '$nama',
                mapel = '$mapel'
                WHERE nip = $nip
    ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari_guru($keyword){
    $query = " SELECT * FROM guru 
                WHERE 
                nama_guru LIKE '%$keyword%' OR
                mapel LIKE '%$keyword%' 
    ";
    return read($query);
}

function total($nilaiUh, $nilaiPraktek, $nilaiPts, $nilaiPas){
    $nilaiUh = $_POST['nilaiUh'];
    $nilaiPraktek = $_POST['nilaiPraktek'];
    $nilaiPts = $_POST['nilaiPts'];
    $nilaiPas = $_POST['nilaiPas'];

    $total = $nilaiUh + $nilaiPraktek + $nilaiPts + $nilaiPas;
    return $total;
}
function rata($nilaiUh, $nilaiPraktek, $nilaiPts, $nilaiPas){
    $nilaiUh = $_POST['nilaiUh'];
    $nilaiPraktek = $_POST['nilaiPraktek'];
    $nilaiPts = $_POST['nilaiPts'];
    $nilaiPas = $_POST['nilaiPas'];

    $rata = ($nilaiUh + $nilaiPraktek + $nilaiPts + $nilaiPas)/4;
    return $rata;
}

?>