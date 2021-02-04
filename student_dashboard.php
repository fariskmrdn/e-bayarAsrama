<?php

	// header("Location: error_header.html");
	session_start();
	include 'config.php';

	$nokp = $_SESSION['nokp'];
	
	//Paparkan maklumat pelajar
	$papar = mysqli_query($connect, "SELECT * FROM pelajar WHERE nokp = '$nokp'");
	$display = mysqli_fetch_array($papar);

  if ($display['bayaran'] === '0') {
    header("Location: studentsettlement.php");
  }


?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFIL <?=$display['nama']?></title>
	<link rel="icon" href="images/KVKS.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

	 <div class="container-fluid">
    <div class="row mx-auto justify-content-center">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 padding">
        
        <img src="images/KVKS.png" class="img-fluid" width="250">

      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 padding">
        <br>
        <p class="lead padding">SELAMAT DATANG<p class="lead padding"><?=$display['nama']?></p></p>
        <p><button type="button" class="btn btn-outline-dark" onclick="window.location='logout.php'">Log Keluar</button></p>
      </div>
      <div class="col-12">
        <hr>
      </div>
    </div>
  </div>

  <div class="container-fluid padding ">
    <div class="row padding justify-content-center">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-5 padding">

    <div class="table-responsive ">
    <table class="table table-striped">
      <thead class="thead-dark">
      <tr>
        <td colspan="3" scope="col" style="background-color: #FFD700;"><h5>MAKLUMAT PELAJAR</h3></td>
      </tr>
      </thead>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>
          <?=$display['nama']?>
        </td>
      </tr>
      <tr>
        <td>NO. KAD PENGENALAN</td>
        <td>:</td>
        <td>
          <?=$display['nokp']?>
        </td>
      </tr>
      <tr>
        <td>DORM</td>
        <td>:</td>
        <td>
          <?=$display['dorm']?>
        </td>
      </tr>
      <tr>
        <td>PENGAJIAN</td>
        <td>:</td>
        <td>
          <?=$display['pengajian']?>
        </td>
      </tr>
      <tr>
        <td>PROGRAM</td>
        <td>:</td>
        <td>
          <?=$display['program']?>
        </td>
      </tr>
      <tr>
        <td colspan="3" scope="col" style="background-color: #FFD700;"><h5>BAYARAN TERTUNGGAK</h5></td>
      </tr>
        <td>Yuran Makan Asrama</td>
        <td>:</td>
        <td>
          RM<?=$display['bayaran']?>
        </td>
      </tr>
    </table>
    </div>
    <div class="col-12 justify-content-center">
      <form method="post">
      <button type="button" class="btn btn-success" onclick="window.location='topay.php';">Lakukan Pembayaran</button>
      <button type="button" class="btn btn-outline-info" onclick="window.location='transhistory.php';">Sejarah Transaksi</button>
      </form>
    </div>
    </div>


    </div>
  </div>

  <br><br>
  <footer>
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

</body>
</html>