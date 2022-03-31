<?php 
    include("connect.php");

    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $cek_in = $_POST["cek_in"];
    $cek_out = $_POST["cek_out"];
    $tipe_kamar = $_POST["tipe_kamar"];
    
    mysqli_query($conn,"UPDATE tb_pesan SET 
    nama='$nama', 
    no_hp='$no_hp', 
    cek_in='$cek_in', 
    cek_out='$cek_out', 
    tipe_kamar='$tipe_kamar' 
    WHERE nik= '$nik'");
    header("location: tampil.php");
?>