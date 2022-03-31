<?php
    include("connect.php"); 
    $id = $_GET["id"];
    $psn = "SELECT * FROM tb_pesan WHERE nik = '$id'";
    $hdata = mysqli_query ($conn, $psn); 
    while ($d= mysqli_fetch_array($hdata)){
        ?>
	
	<!doctype html>
	<html lang="en">
  	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Three Hotel Palangka Raya</title>
  	</head>

    <body>
 <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">THREE HOTEL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Rooms
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="stdroom.php">Standard Room</a>
                            <a class="dropdown-item" href="sprroom.php">Superior Room</a>
                            <a class="dropdown-item" href="delroom.php">Deluxe Room</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	 <!--banner-->
	 <div class="jumbotron jumbotron-fluid banner">
        <div class="container text-center">
            <h1 class="display-6">Halaman Ubah Data</h1>
        </div>
    </div>

    <div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-3 py-2">
					<div>
    <div class="card mb-4">
		<div class="h5 card-header">
			<!-- <i class="fas fa-table me-1"></i> -->
			Ubah Data
	    </div>
    <div class="card-body">

	<form action="edit.php" method="POST">
		<input type="hidden" name="nik" value="<?php echo $d["nik"]; ?>">
		<ul>
			<div class="mb-3">
				<label for="nama">Nama : </label>
				<input type="text" class="form-control" name="nama" id="nama" required value="<?php echo $d["nama"]; ?>">
			</div>
			<div class="mb-3">
				<label for="no_hp">No HP : </label>
				<input type="text" class="form-control" name="no_hp" id="no_hp" required value="<?php echo $d["no_hp"]; ?>">
			</div>
			<div class="mb-3">
				<label for="cek_in">Cek In : </label>
				<input type="date" class="form-control" name="cek_in" id="cek_in" required value="<?php echo $d["cek_in"]; ?>">
			</div>
			<div class="mb-3">
				<label for="cek_out">Cek Out : </label>
				<input type="date" class="form-control" name="cek_out" id="cek_out" required value="<?php echo $d["cek_out"]; ?>">
			</div>
            <div class="mb-3">
				<label for="tipe_kamar">Tipe Kamar</label>
                        <select name="tipe_kamar" id="tipe_kamar" required value="<?php echo $d["tipe_kamar"]; ?>">
                        <option value="Deluxe Room">Deluxe Room</option>
                        <option value="Standard Room">Standard Room</option>
                        <option value="Superior Room">Superior Room</option>
                    </select>
				</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-primary" name="submit">Ubah Data!</button>
				<a class="btn btn-primary" href="tampil.php">Kembali</a>
			</div>
		</ul>
	</form>
	
	 <!-- Bootstrap JS -->
	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" 
    crossorigin="anonymous"></script>

  </body>

  <!--footer-->
<footer>
    <div class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Copyright @2022 Three Hotel Palangka Raya</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
    <?php
    }
    ?>