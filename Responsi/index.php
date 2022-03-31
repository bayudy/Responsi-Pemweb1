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
            <h1 class="display-6">Selamat Datang di Three Hotel Palangka Raya</h1>
        </div>
    </div>
    
    <!-- deskripsi three hotel -->
        <section class="homefovere" id="homefovere">
                <div class="container mt-5">
                    <div class="row mb-2">
                        <div class="col-md text-center">
                            <h3>Three Hotel Palangka Raya</h3>
                            <hr>
                        </div>
                    </div>
                    <div>
                        <div class="col-md text-center mb-5">
                        <p>Selamat datang di Three Hotel Palangka Raya! Three hotel merupakan sebuah Hotel bintang 3 
                            dengan desain modern dan klasik yang menuangkan unsur budaya tiap daerah hotel berada. 
                            Sehingga memberikan suasana nyaman serta pengalaman yang berbeda saat menginap di Hotel 
                            Three Palangka Raya. Fasilitas yang disediakan diantaranya adalah Restoran Cafe, dan Layanan 
                            antar jemput Bandara sehingga sangat mendukung kenyamaman custumer. Harga yang ditawarkan 
                            sangat bersahabat dengan kantong. Dengan memberikan fasilitas serta layanan yang sangat ramah 
                            dapat menjadikan Three hotel Palangka Raya sangat cocok untuk pilihan Penginapan Anda.</p>
                        </div>
                    </div>
                </div>
        </section>

        <!--kamar favorite-->
       <section class="homekamar" id="homekamar">
            <div class="container mb-5">
                    <div class="row mb-2">
                        <div class="col-md text-center">
                            <h3>Kamar Favorit Tamu</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="card" >
                                <img src="https://foverehotels.com//img_anekaweb/kamar/small_71smg-superior.jpg" 
                                class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="stdroom.php"><h5 class="card-title text-center">Standard Room</h5></a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Rp.400.000/Malam</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card" >
                                <img src="https://foverehotels.com//img_anekaweb/kamar/small_55smg-deluxe.jpg" 
                                class="card-img-top" alt="...">
                                <div class="card-body">
                                <a href="sprroom.php"><h5 class="card-title text-center">Superior Room</h5></a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Rp.600.000/Malam</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card" >
                                <img src="https://foverehotels.com//img_anekaweb/kamar/small_45pky-deluxe.jpg" 
                                class="card-img-top" alt="...">
                                <div class="card-body">
                                <a href="delroom.php"><h5 class="card-title text-center">Deluxe Room</h5></a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Rp.900.000/Malam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
    <!--layanan-->
    <section class="homelayanan" id="homelayanan">
            <div class="container mb-5">
                    <div class="row mb-2">
                        <div class="col-md text-center">
                            <h3>Layanan Three Hotel</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title text-center">Kenyamanan</h6>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Kenyamanan adalah hal utama yang kami tawarkan, 
                                        untuk itu segala kebutuhan menginap telah kami siapkan khusus untuk Anda.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title text-center">Harga Terbaik</h6>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Kami hanya menawarkan kamar budget berkualitas dengan
                                        penawaran harga terbaik tanpa dipungut biaya transaksi lainnya.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title text-center">Restoran</h6>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Restoran siap melayani pembeli atau konsumen pada jam 
                                        10.00 atau 11.00 pagi  dan tutup restoran pada jam 23.00.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title text-center">Antar Jemput</h6>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center">Kami siap membantu akses transportasi tamu menggunakan 
                                        layanan Antar Jemput yang tersedia dihotel kami.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>  
    </section>
    
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