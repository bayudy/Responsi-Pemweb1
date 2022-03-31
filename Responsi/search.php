<?php
   require("Connect.php");
   $output = '';
   if (isset($_POST["query"])) {
      $namanya = mysqli_real_escape_string($conn, $_POST["query"]);
      $query = "SELECT * FROM tb_pesan 
               WHERE tb_pesan.nama LIKE '%" .$namanya. "%'";
   
   $result = mysqli_query($conn, $query);

   if ($result) {
      $output .= '
      <table class="table table-bordered" >
         <tr align = "center">
            <th>No.KTP</th>
            <th>Nama</th>
            <th>No Telp/Hp</th>
            <th>Cek In</th>
            <th>Cek Out</th>
            <th>Tipe Kamar</th>
         </tr>
      ';
   
      while ($row = mysqli_fetch_array($result)) {
         $output .= '
         <tr align = "center">
            <td>'.$row["nik"].'</td>  
            <td>'.$row["nama"].'</td>  
            <td>'.$row["no_hp"].'</td>  
            <td>'.$row["cek_in"].'</td>  
            <td>'.$row["cek_out"].'</td>
            <td>'.$row["tipe_kamar"].'</td>           
         </tr>
         ';
      }
      echo $output;
   } else {
      echo "Masukan yang ingin dicari";
   }
}
?> 