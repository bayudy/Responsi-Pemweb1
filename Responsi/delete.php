<?php
    require_once("connect.php");

    $id = $_GET["id"]; 

    $query = "DELETE FROM tb_pesan WHERE nik = '$id'";
    if(mysqli_query($conn, $query)){
        header("Location: tampil.php");
    }else{
        echo "Hapus data gagal";
    }
?>