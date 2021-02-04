<?php

	session_start();

	include 'config.php';

	$nokp = $_SESSION['nokp'];


	$showUserCred = mysqli_query($connect, "SELECT * FROM pelajar WHERE nokp = '$nokp'");

	$fetchUser = mysqli_fetch_array($showUserCred);

	if (isset($_POST['byr'])) {
		$_SESSION['nama']= $_POST['nama'];
		$_SESSION['tel']= $_POST['tel'];
		$_SESSION['topay']= $_POST['topay'];
		$_SESSION['emel']= $_POST['emel'];

		
		
		header("Location: paymentform.php");
		
		
	}


?>
<!DOCTYPE html>
<html>
<head>
  <title>PAYMENT FORM <?=$fetchUser['nama']?></title>
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
        <p class="lead padding">BORANG PEMBAYARAN<p class="lead padding"><?=$fetchUser['nama']?></p></p>
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
      <div class="form-group">
        <form method="post">
    <table class="table table-striped">
      <thead class="thead-dark">
      <tr>
        <td colspan="3" scope="col" style="background-color: #FFD700;"><h5>MAKLUMAT PEMBAYAR</h3></td>
      </tr>
      </thead>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="nama" readonly="" value="<?=$fetchUser['nama']?>">
        </td>
      </tr>
      <tr>
        <td>NO. KAD PENGENALAN</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="nokp" readonly="" value="<?=$fetchUser['nokp']?>">
        </td>
      </tr>
      <tr>
        <td>DORM</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="dorm" readonly="" value="<?=$fetchUser['dorm']?>">
        </td>
      </tr>
      <tr>
        <td>PENGAJIAN</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="pengajian" readonly="" value="<?=$fetchUser['pengajian']?>">
        </td>
      </tr>
      <tr>
        <td>PROGRAM</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="pengajian" readonly="" value="<?=$fetchUser['program']?>">
        </td>
      </tr>
      <tr>
        <td>TUNGGAKAN</td>
        <td>:</td>
        <td>
          RM<?=$fetchUser['bayaran']?>
        </td>
      </tr>
      <tr>
        <td>EMEL</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="emel" value="" placeholder="Masukkan Emel Anda" required="">
        </td>
      </tr>
      <tr>
        <td>NO.TEL</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="tel" value="" placeholder="Masukkan Nombor Telefon Anda" required="">
        </td>
      </tr>
       <tr>
        <td>UNTUK DIBAYAR</td>
        <td>:</td>
        <td>
          <input class="form-control" type="text" name="topay" value="" placeholder="Masukkan Nilai Bayar" required="">
        </td>
      </tr>
      <tr>
        <td colspan="3">
        
     
          <input type="submit" class="btn btn-success" name="byr" value="Bayar">
         
          <button type="button" class="btn btn-outline-warning" onclick="window.location='student_dashboard.php';">Kembali Ke Dashboard Pelajar</button>
     
         
        </td>
      </tr>
    
    </table>
     </form>
    </div>
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

   <div id="notice" class="modal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">KAEDAH PEMBAYARAN TERKINI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Sistem pembayaran menerima kaedah pembayaran secara FPX (Online Banking) dan Kad Kredit / Debit. <b>Caj sebanyak RM1.00</b> akan dikenakan untuk pelanggan kad debit / kredit. Terima kasih
        </p>
      </div>
     
      </div>
    </div>
  </div>




    <!-- Javascript Code For Window Location -->
    <script type="text/javascript">
      function mybtn() {
        window.location = "student_login.php";
      }
    </script>
  
  <!-- Bootstrap JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


   <script type="text/javascript">
    $(document).ready(function(){
      $("#notice").modal('show');
    });
  </script>

</body>
</html>