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
    <title>There Hotel Palangka Raya</title>
  </head>

  <!--navbar-->
  <body>
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
                <h1 class="display-6">Contact Us</h1>
            </div>
        </div>

        <!--maps-->
        <section class="contactmaps" id="contactmaps">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md text-center">
                        <h3>Maps Three Hotel Palangka Raya</h3>
                        <hr>
                    </div>
                    <div class="embed-responsive embed-responsive-21by9 mb-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8574858817806!2d113.91422391410605!3d-2.2074709379457103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb25094706e19%3A0xbb98948229782892!2sBundaran%20Besar%20Palangkaraya!5e0!3m2!1sid!2sid!4v1648056513744!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

            <!--alamat-->
            <div class="container">
                <div class="row mb-5">
                <div class="col-md-5 contactalamat">
                    <h4 class="text-center">Alamat</h4>
                    <hr>
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                        <h5 class="card-title text-center">Three Hotel Palangka Raya</h5>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item">Jl. Yos Sudarso, Palangkaraya - Kalteng 73112</li>
                            <!-- <li class="list-group-item">Telp. : 0536 - 0000 000 / WA : 0852 8888 8888</li> -->
                        </ul>
                    </div>
                </div>

                <!--formkontak-->
                <div class="col-md-7 contactform">
                    <h4 class="text-center">Form Kontak</h4>
                    <hr>
                    <center>
                    <img src="https://w7.pngwing.com/pngs/672/164/png-transparent-whatsapp-icon-whatsapp-logo-computer-icons-zubees-halal-foods-whatsapp-text-circle-unified-payments-interface.png" width="30">
                    <a href="..." target="_blank">+62 852-8808-8088</a>
                    <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png" width="30">
                    <a href="..." target="_blank">ucupganteng_</a>  
                    </center>
                    <center>
                    Telp. : 0536 - 3301 123
                    </center>
                    <!-- <form>
                        <div>
                            <p class="mb-4">Silakan anda isi form Kontak dibawah ini untuk menghubungi kami secara online.</p>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Subjek</label>
                            <input type="text" class="form-control" id="subjek">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pesan</label>
                            <textarea name="pesan" id="pesan" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form> -->
                </div>
                </div>
            </div>
        </div>

    
      <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
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