<?php 
if(isset($_POST['submit']) ){
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $absen = $_POST['absen'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $nilai_absen = $absen * 0.1;
    $nilai_tugas = $tugas * 0.2;
    $nilai_uts  = $uts * 0.3;
    $nilai_uas = $uas*0.4;
    $nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

    if($nilai_akhir >= 80){
        $grade = "A";
    }elseif($nilai_akhir >= 70){
        $grade = "B";
        
    }elseif($nilai_akhir>=50){
        $grade = "C";

    }elseif($nilai_akhir>=40){
        $grade = "D";
    }else{
        $grade = "E";
    }
}
echo "Nilai Mahasiswa
Nama :  $nama <br>
Matkul :   $matkul <br>
Nilai Tugas :   $nilai_tugas <br>
Nilai Uts :   $nilai_uts <br>
Nilai Uas :   $nilai_uas <br>
Nilai Akhir :  $nilai_akhir <br>
Grade : $grade <br>
"
?>