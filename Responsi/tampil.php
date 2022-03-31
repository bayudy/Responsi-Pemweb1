<?php
    require("connect.php");
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
                    <li class="nav-item">
                        <a class="nav-link" href="tampil.php">Daftar Tamu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--banner-->
    <div class="jumbotron jumbotron-fluid banner">
        <div class="container text-center">
            <h1 class="display-6">DAFTAR TAMU</h1>
        </div>
    </div>
    <table border="1" cellpadding="10" cellspacing="0" align="center">

	<tr>
		<th>No.KTP</th>
		<th>Nama</th>
		<th>No HP</th>
		<th>Cek In</th>
		<th>Cek Out</th>
		<th>Tipe Kamar</th>
        <th>Aksi</th>
	</tr>

	<?php 
        $data = "SELECT * FROM tb_pesan ";
        $hdata = mysqli_query ($conn,$data);
        while($row = mysqli_fetch_assoc($hdata)){ 
            ?>
	<tr>
        <td><?php echo $row["nik"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["no_hp"]; ?></td>
		<td><?php echo $row["cek_in"]; ?></td>
		<td><?php echo $row["cek_out"]; ?></td>
        <td><?php echo $row["tipe_kamar"]; ?></td>
        <td>
        <a class="btn btn-primary btn-sm bg-primary" href="update.php?id=<?php echo $row["nik"]; ?>">Update</a>
        <a class="btn btn-primary btn-sm bg-danger" href="delete.php?id=<?php echo $row["nik"]; ?>" onclick="return confirm('yakin?');">Delete</a>
		</td>
	</tr>
	<?php }
    mysqli_close($conn);?>
	
</table>
<br>
<a class="btn btn-primary btn-sm bg-primary" href="halsearch.php">Cari Nama</a>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

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
