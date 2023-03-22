<?php
function tambah($x, $y){
    $x = $_POST['x'];
    $y = $_POST['y'];
    $tambah = $x + $y;
    return $tambah;
}
function kurang($x, $y){
    $x = $_POST['x'];
    $y = $_POST['y'];
    $kurang = $x - $y;
    return $kurang;
}
function kali($x, $y){
    $x = $_POST['x'];
    $y = $_POST['y'];
    $kali = $x * $y;
    return $kali;
}
function bagi($x, $y){
    $x = $_POST['x'];
    $y = $_POST['y'];
    $bagi = $x / $y;
    return $bagi;
}

?>