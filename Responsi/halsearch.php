<!DOCTYPE html>
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">    
     <link rel = "Stylesheet" href = "Indexs.css">
     <title>Responsi</title>
</head>
<body>
     <div id="top"> 
          
          <p align="right">
               <a class="btn btn-primary btn-sm bg-primary" href="tampil.php">Kembali</a>    
          </p>
     </div>
     <input type="text" name="search_text" id="search_text" placeholder="Nama Pelanggan..." class="search">
     <div class="table-responsive" id="result"></div>
     <script>
          $(document).ready(function(){
               load_data();
               function load_data(query){
                    $.ajax({ // memanggil nama atau merujuk ke halsearch.php
                         url: "search.php",
                         method: "POST",
                         data:{
                              query: query
                         },
                         success: function(data) {
                              $('#result').html(data);
                         }
                    });
               }
               $('#search_text').keyup(function() {
                    var search = $(this).val();
                    if (search != '') {
                         load_data(search);
                    } else {
                         load_data();
                    }
               });
          });
     </script>
</body>
</html>