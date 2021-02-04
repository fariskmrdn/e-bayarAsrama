<?php

	// header("Location: error_header.html");
	session_start();
	include 'config.php';

	$nokp = $_SESSION['nokp'];
	
	//Paparkan maklumat pelajar
	$papar = mysqli_query($connect, "SELECT * FROM pelajar WHERE nokp = '$nokp'");
	$display = mysqli_fetch_array($papar);


?>
<!DOCTYPE html>
<html>
<head>
	<title>SEJARAH PEMBAYARAN <?=$display['nama']?></title>
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
        <p class="lead padding">SEJARAH PEMBAYARAN<p class="lead padding"><?=$display['nama']?></p></p>
        <p><button type="button" class="btn btn-outline-dark" onclick="window.location='student_dashboard.php'">Kembali Ke Dashboard Pelajar</button></p>
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
        <td colspan="3" scope="col" style="background-color: #FFD700;">
          <h5>TRANSAKSI</h3>
          <p>
            * Status transaksi :<br>
            1 (Transaksi Berjaya)<br>
            2 (Transaksi Sedang Diproses)<br>
            3 (Transaksi Gagal)<br>
            4 (Sedang Diproses)
          </p>
        </td>
      </tr>
      </thead>
      <tr>
        <th>ID TRANSAKSI</th>
        <th>TARIKH TRANSAKSI</th>
        <th>STATUS TRANSAKSI</th>
      </tr>
      <?php

        $getfromTrans = "SELECT * FROM trans_history WHERE nokp = $nokp";
        $queryTrans = mysqli_query($connect,$getfromTrans);
        while ($row = mysqli_fetch_array($queryTrans)) {
          echo "
            <tr>
              <td>".$row['transaction_id']."</td>
              <td>".$row['tarikh_transaksi']."</td>
              <td>".$row['status_transaksi']."</td>
            </tr>
          ";
        }

      ?>
    </table>
    </div>
   
    </div>


    </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br>
  <footer class="fixed-bottom">
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