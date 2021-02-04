<?php
	include 'config.php';
	session_start();
  $msg = '';
	$user = $_SESSION['user'];
	$papar = mysqli_query($connect, "SELECT * FROM warden WHERE idwarden = '$user'");
	$display = mysqli_fetch_array($papar);


?>
<!DOCTYPE html>
<html>
<head>
  <title>SENARAI TUNGGAKAN PELAJAR</title>
  <link rel="icon" href="images/KVKS.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   
</head>

<body>
  <!-- NAVIGATION BAR USING BOOTSTRAP FRAMEWORK -->
    <nav class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #000000; padding: 1rem; ">
      <img src="images/asrama1.png" class="navbar-brand img-fluid" width="270">

      
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span style="background-color: white;" class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="profileblok.php" class="nav-link" style="color: white;">PROFIL BLOK</a></li>
        <li class="nav-item"><a href="addstudent.php" class="nav-link" style="color: white;">TAMBAH PELAJAR</a></li>
        <li class="nav-item"><a href="transaction.php" class="nav-link" style="color: white;">TRANSAKSI TERKINI</a></li>
        <li class="nav-item"><a href="warden_tunggakan.php" class="nav-link" style="color: white;">TUNGGAKAN</a></li>
      </ul>
      </div>
    </nav>


    <div class="container-fluid" style="background-color: #FFD700;">
    <div class="row mx-auto">
     
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 padding">
        <br>
        <p class="lead padding">SENARAI TUNGGAKAN PELAJAR</p>
        <p><button type="button" class="btn btn-outline-dark" onclick="window.location='logout.php'">Kembali Ke Dashboard</button></p>
      </div>
      <div class="col-12">
        <hr>
      </div>
    </div>
  </div>

 <!--  <div class="container-fluid">
    <div class="row mx-auto">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12 col-xl-12"> -->

    <div class="table-responsive">
    <table class="table table-striped table-md">
      <thead class="thead-dark">
      <tr>
        <td colspan="6" scope="col" style="background-color: #FFD700;"><h5 style="text-align: center;">TUNGGAKAN</h3></td>
      </tr>
      </thead>
      <tr>
        <th>BIL</th>
        <th>NAMA PELAJAR</th>
        <th>NOKP</th>
        <th>PENGAJIAN</th>
        <th>DORM</th>
        <th>TUNGGAKAN</th>
      </tr>
      <?php 

      $getTunggak = "SELECT * FROM pelajar WHERE bayaran > 0";
      $QueryDB = mysqli_query($connect,$getTunggak);
      $bil = 1;
      while ($row=mysqli_fetch_array($QueryDB)) {
        echo "

        <tr>
          <td>".$bil++."</td>
          <td>".$row['nama']."</td>
          <td>".$row['nokp']."</td>
          <td>".$row['pengajian']."</td>
          <td>".$row['dorm']."</td>
          <td style='color:red;font-weight:bold;'>RM".$row['bayaran']."</td>
        </tr>

        ";
      }

      ?>
    </table>
    </div>
    
    <!-- MODAL ALERT BOX -->
    <!-- <div id="notice" class="modal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">MAKLUMAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sistem masih dalam proses pengujian dan pengendalian ralat. Pilihan kemaskini transaksi hanya boleh dipapar sahaja untuk semakan</p>
      </div>
     
      </div>
    </div>
  </div> -->


    <!-- </div>


    </div>
  </div>
 -->
  <!-- <br><br>
  <footer class="footer fixed-bottom">
    <div class="container-fluid" style="background-color: #9e9e9e;"> 
      <div class="row padding">
        <div class="col-12">
          <br>
          <p class="h5">PERHATIAN</p>
          <hr class="light">
          <p>Sistem dalam fasa pengujian pengendalian ralat! Jika berlaku sebarang permasalah, sila berhubung dengan Ketua Warden (Puan Nor Azura binti Mahat) atau mana-mana warden untuk tindakan lanjut</p>
        </div>
      </div>
    </div>
  </footer>
 -->




    <!-- Bootstrap JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   <!-- <script type="text/javascript">
    $(document).ready(function(){
      $("#notice").modal('show');
    });
  </script> -->
</body>
</html>