<?php
	include 'config.php';
	session_start();
	$id = $_GET['id'];

	//Warden data
	$user = $_SESSION['user'];
	$sql1 = mysqli_query($connect,"SELECT * FROM warden WHERE idwarden = '$user'");
	$displaywarden = mysqli_fetch_array($sql1);

	//Student data
	$sql2 = mysqli_query($connect, "SELECT * FROM pelajar WHERE id = '$id'");
	$datafetch = mysqli_fetch_array($sql2);

	//Untuk update data pelajar
	if(isset($_POST['update'])) {
		$nama = $_POST['nama'];
		$nokp = $_POST['nokp'];
		$program = $_POST['program'];
		$pengajian = $_POST['pengajian'];
		$dorm = $_POST['dorm'];
		$jumlahbayar = $_POST['bayar'];

		$updatequery = "UPDATE pelajar SET nama = '$nama', `nokp` = '$nokp', `program` = '$program', `pengajian` = '$pengajian', `dorm` = '$dorm', `bayaran` = '$jumlahbayar' WHERE id = '$id'";
		$run = mysqli_query($connect,$updatequery);

		if (!$run) {
			echo "
				<script>
					alert('KEMASKINI REKOD PELAJAR GAGAL !');
					window.location = 'senarai_pelajar.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('KEMASKINI REKOD PELAJAR BERJAYA !');
					window.location = 'profileblok.php';
				</script>
			";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>KEMASKINI MAKLUMAT PELAJAR</title>
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
        <li class="nav-item"><a href="warden_dashboard.php" class="nav-link" style="color: white;">DASHBOARD</a></li>
        <li class="nav-item"><a href="addstudent.php" class="nav-link" style="color: white;">TAMBAH PELAJAR</a></li>
        <li class="nav-item"><a href="warden_login.php" class="nav-link" style="color: white;">TRANSAKSI TERKINI</a></li>
        <li class="nav-item"><a href="warden_tunggakan.php" class="nav-link" style="color: white;">TUNGGAKAN</a></li>
      </ul>
      </div>
    </nav>


    <div class="container-fluid" style="background-color: #FFD700;">
    <div class="row mx-auto">
     
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 padding">
        <br>
        <p class="lead padding">KEMASKINI MAKLUMAT PELAJAR</p>
        <p><button type="button" class="btn btn-outline-dark" onclick="window.location='profileblok.php'">Kembali ke Profil Blok</button></p>
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
        <td colspan="6" scope="col" style="background-color: #FFD700;"><h5 style="text-align: center;">MAKLUMAT PELAJAR</h3></td>
      </tr>
      </thead>
      <div class="form-group">
        <form method="post">
           <tr>
             <td width="25%">NAMA PELAJAR</td>
             <td>:</td>
             <td>
               <input class="form-control" value="<?=$datafetch['nama']?>" type="text" name="nama">
             </td>
           </tr>
           <tr>
             <td width="25%">NO KAD PENGENALAN</td>
             <td>:</td>
             <td>
               <input class="form-control" value="<?=$datafetch['nokp']?>" type="text" name="nokp">
             </td>
           </tr>
           <tr>
             <td width="25%">PROGRAM</td>
             <td>:</td>
             <td>
               <input class="form-control" value="<?=$datafetch['program']?>" type="text" name="program">
             </td>
           </tr>
           <tr>
             <td width="25%">PENGAJIAN</td>
             <td>:</td>
             <td>
               <input class="form-control" value="<?=$datafetch['pengajian']?>" type="text" name="pengajian">
             </td>
           </tr>
           <tr>
             <td width="25%">DORM</td>
             <td>:</td>
             <td>
               <input class="form-control" value="<?=$datafetch['dorm']?>" type="text" name="dorm">
             </td>
           </tr>
           <tr>
             <td width="25%">JUMLAH BAYARAN DITETAPKAN
                  <br>*JIKA PELAJAR BELUM MELUNASKAN APA-APA BAYARAN !
                  <br>Keluarga < RM4000.00 (RM350)
                  <br>Keluarga > RM4000.00 (RM720)
             </td>
             <td>:</td>
             <td>
               <input class="form-control" value="<?=$datafetch['bayaran']?>" type="text" name="bayar">
             </td>
           </tr>
           <tr>
              <td colspan="3">
                <center>
                  <input class="btn btn-warning" type="reset" name="reset" onclick="return confirm('Anda pasti untuk set semula data pelajar?');" value="SET SEMULA DATA">
                  <input class="btn btn-success" type="submit" onclick="return confirm('Anda pasti untuk kemaskini data pelajar?');" name="update" value="KEMASKINI REKOD PELAJAR">
                </center>
              </td>
           </tr>
        </form>
      </div>
    </table>
    </div>
    
    
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


</body>
</html>