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

    <!--deskripsi deluxe-->
    <section class="stdroom" id="stdroom">
        <div class="jumbotron jumbotron-fluid pb-1 bg-white">
            <div class="container text-center">
                <div class="row">
                    <div class="col text-center">
                        <h2>Deluxe Room</h2>
                        <hr>
                        <p>Deluxe Room mewah yang memiliki sebuah kamar tidur utama dengan kamar mandi en-suite yang 
                            mewah, sofa, bak mandi, mantel mandi dan sebuah lemari pakaian. Kamar ini juga memiliki ruang 
                            tamu yang dilengkapi dengan fasilitas home theater, TV LCD dengan mini HiFi, ruang makan, 
                            dapur, dan kamar mandi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!--reservasi deluxe-->
        <div class="container">
            <div class="row text-center">
                <div class="col-md stdreser">
                    <h2>Reservasi Deluxe Room</h2>
                    <hr>
                    <p>Rp.900.000/Malam</p>
                </div>
            </div>
            <div class="row mb-5">

            <!-- img deluxe -->
            <div class="col-md-8">
                <div>
                    <img src="https://foverehotels.com//img_anekaweb/kamar/small_45pky-deluxe.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-4">
                
                <!-- form pemesanan deluxe -->
                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label for="nik">No.KTP</label>
                        <input type="" class="form-control" id="nik" name="nik" required >
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required >
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Telp/Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="cek_in">Cek In</label>
                        <input type="date" class="form-control" id="cek_in" name="cek_in" required>
                    </div>
                    <div class="form-group">
                        <label for="cek_out">Cek Out</label>
                        <input type="date" class="form-control" id="cek_out" name="cek_out" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_kamar">Tipe Kamar</label>
                        <!-- <input type="text" class="form-control" id="tamu" name="tamu" required> -->

                        <select name="tipe_kamar">
                        <option value="Deluxe">Deluxe</option>
                        <!-- <option value="Standard">Standard</option>
                        <option value="Superrior">Superrior</option> -->
                    </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark">Pesan Sekarang</button>
                </form>
            </div>
            </div>
        </div> 

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>

  <footer>
      <!--footer-->
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