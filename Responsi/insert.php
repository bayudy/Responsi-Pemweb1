<?php
    include("connect.php");

    if(isset($_POST['submit'])){
        $nik = $_POST["nik"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        $cek_in = $_POST["cek_in"];
        $cek_out = $_POST["cek_out"];
        $tipe_kamar = $_POST["tipe_kamar"];
        
        $query = "INSERT INTO tb_pesan SET 
                nik='$nik', 
                nama='$nama', 
                no_hp='$no_hp', 
                cek_in='$cek_in', 
                cek_out='$cek_out', 
                tipe_kamar='$tipe_kamar'";
                
        if(mysqli_query($conn, $query)){ 
            header("Location: index.php");
        }else{
            echo "Tambah data gagal";
        }
    }
 
    mysqli_close($conn);
?>