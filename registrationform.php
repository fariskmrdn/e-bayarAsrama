<?php
	session_start();
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>SISTEM E-BAYAR ASRAMA</title>
	<link rel="icon" href="images/KVKS.png">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
</head>
<style type="text/css">
	.navbar {
		background-color: #000000;
		
	}
	.container {
		background-color: #FFD700;
		color: #000000;
	}
	body {
		font-family: 'Oxygen', sans-serif;

	}
	html {
  		font-size: 1rem;
	}

	.row jumbotron{
		background-color: #99cccc;
	}

	@include media-breakpoint-up(sm) {
 	 html {
    font-size: 1.2rem;
  }
}

	@include media-breakpoint-up(md) {
  html {
    font-size: 1.4rem;
  }
}

@include media-breakpoint-up(lg) {
  html {
    font-size: 1.6rem;
  }
}
</style>
<body>

		<!-- NAVIGATION BAR USING BOOTSTRAP FRAMEWORK -->
		<nav class="navbar navbar-expand-sm navbar-light sticky-top">
			<img src="images/asrama1.png" class="navbar-brand img-fluid" width="270">

			
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
				<span style="background-color: white;" class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="student_login.php" class="nav-link" style="color: white;">PELAJAR |</a></li>
				<li class="nav-item"><a href="warden_login.php" class="nav-link" style="color: white;">WARDEN |</a></li>
				<li class="nav-item"><a href="warden_login.php" class="nav-link" style="color: white;">DAFTAR ASRAMA |</a></li>
				<li class="nav-item"><a href="https://forms.gle/vo2foSH17zoeH1Qm7" class="nav-link" style="color: white;">BORANG MAKLUM BALAS</a></li>
			</ul>
			</div>
		</nav>

		<!-- DASHBOARD INDEX -->
		<div class="container-fluid">

			<div class="row jumbotron" style="background-color: #FFD700;">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6 col-xl-6">
					<p class="h2">PERMOHONAN KEMASUKKAN KE KOLEJ KEDIAMAN<br>TAHUN 2021<br><br>
						
					</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6 col-xl-6">
					<img src="images/icon.png" class="img-fluid">

				</div>
			</div>
			
		</div>

		<div class="table-responsive">
    <table class="table table-striped table-md">
      <thead class="thead-dark">
      <tr>
        <td colspan="3" scope="col" style="background-color: #FFD700;"><h5 style="text-align: center;">BORANG MASUK</h3></td>
      </tr>
      </thead>
      <form method="post">

      <tr>
        <td>NAMA PELAJAR</td>
        <td>:</td>
        <td>
          <center><input type="text" name="namapelajar" placeholder="Masukkan Nama Penuh Pelajar" required="" class="form-control"></center>
        </td>
      </tr>

      <tr>
        <td>NO. KAD PENGENALAN</td>
        <td>:</td>
        <td>
          <center><input type="text" name="nokp" placeholder="Masukkan No.KP Tanpa (-)" required="" class="form-control"></center>
        </td>
      </tr>

      <tr>
        <td>KATA LALUAN PELAJAR</td>
        <td>:</td>
        <td>
          <center><input type="text" name="pswd" placeholder="4 Angka Akhir No KP" required="" class="form-control"></center>
        </td>
      </tr>

      <tr>
        <td>PROGRAM</td>
        <td>:</td>
        <td>
          <center><select name="program" required="" class="form-control">
            <option>Sila Pilih Program</option>
            <option value="KPD">Sistem Pengurusan Pangkalan Data & Aplikasi Web</option>
            <option value="KMK">Animasi 3D</option>
            <option value="HSK">Hospitaliti Seni Kulinari</option>
            <option value="HBP">Hospitaliti Bakeri Pastri</option>
            <option value="BPM">Pemasaran</option>
            <option value="BAK">Perakaunan</option>
            <option value="BPB">Perbankan</option>
            <option value="OPP">SLDN - PERABOT</option>
            <option value="PPM">SLDN - Penyediaan Pembuatan Makanan</option>
          </select></center>
        </td>
      </tr>

      <tr>
        <td>PENGAJIAN</td>
        <td>:</td>
        <td>
          <center><select name="pengajian" required="" class="form-control">
            <option>Sila Pilih Pengajian Pelajar</option>
            <option value="1 SVM">1 SIJIL VOKASIONAL MALAYSIA</option>
            <option value="2 SVM">2 SIJIL VOKASIONAL MALAYSIA</option>
            <option value="1 DVM">1 DIPLOMA VOKASIONAL MALAYSIA</option>
            <option value="2 DVM">2 DIPLOMA VOKASIONAL MALAYSIA</option>
          </select></center>
        </td>
      </tr>

      <tr>
        <td>DORM</td>
        <td>:</td>
        <td>
        <center><select name="dorm" required="" class="form-control">
          <option>Sila Pilih Unit Dorm</option>
         <!--  <option>------BLOK UTHMAN------</option> -->
          <option value="UTHMAN 1">UTHMAN 1</option>
          <option value="UTHMAN 2">UTHMAN 2</option>
          <option value="UTHMAN 3">UTHMAN 3</option>
          <option value="UTHMAN 4">UTHMAN 4</option>
          <option value="UTHMAN 5">UTHMAN 5</option>
          <option value="UTHMAN 6">UTHMAN 6</option>
          <option value="UTHMAN 7">UTHMAN 7</option>
          <option value="UTHMAN 8">UTHMAN 8</option>
          <!-- <option>------BLOK ALI------</option> -->
          <option value="ALI 1">ALI 1</option>
          <option value="ALI 2">ALI 2</option>
          <option value="ALI 3">ALI 3</option>
          <option value="ALI 4">ALI 4</option>
          <option value="ALI 5">ALI 5</option>
          <option value="ALI 6">ALI 6</option>
          <option value="ALI 7">ALI 7</option>
          <option value="ALI 8">ALI 8</option>
          <!-- <option>------BLOK SITI HAJAR------</option> -->
          <option value="SITI HAJAR 1">SH 1</option>
          <option value="SITI HAJAR 2">SH 2</option>
          <option value="SITI HAJAR 3">SH 3</option>
          <option value="SITI HAJAR 4">SH 4</option>
          <option value="SITI HAJAR 5">SH 5</option>
          <option value="SITI HAJAR 6">SH 6</option>
          <option value="SITI HAJAR 7">SH 7</option>
          <option value="SITI HAJAR 8">SH 8</option>
          <!-- <option>------BLOK SITI KHADIJAH------</option> -->
          <option value="SITI KHADIJAH 1">SK 1</option>
          <option value="SITI KHADIJAH 2">SK 2</option>
          <option value="SITI KHADIJAH 3">SK 3</option>
          <option value="SITI KHADIJAH 4">SK 4</option>
          <option value="SITI KHADIJAH 5">SK 5</option>
          <option value="SITI KHADIJAH 6">SK 6</option>
          <option value="SITI KHADIJAH 7">SK 7</option>
          <option value="SITI KHADIJAH 8">SK 8</option>
          <!-- <option>------BLOK SITI AISYAH------</option> -->
          <option value="SITI AISYAH 1">SA 1</option>
          <option value="SITI AISYAH 2">SA 2</option>
          <option value="SITI AISYAH 3">SA 3</option>
          <option value="SITI AISYAH 4">SA 4</option>
          <option value="SITI AISYAH 5">SA 5</option>
          <option value="SITI AISYAH 6">SA 6</option>
          <option value="SITI AISYAH 7">SA 7</option>
          <option value="SITI AISYAH 8">SA 8</option>
        </select></center>
      </td>
      </tr>
<!-- 
      STATEMENT UNTUK BUAT KALKULATOR GAJI!
      	if gaji < 4999
      		print 250
      	else
      		print 750 -->



      <tr>
      	<form method="post">
        <td>GAJI IBU BAPA/PENJAGA</td>
        <td>:</td>
        <td>
          <center><input type="text" name="gaji" placeholder="Masukkan Nilai Gaji Tanpa (RM)" required="" class="form-control"><input type="submit" name="KLIK UNTUK SAHKAN JUMLAH BAYAR"></center>
        </td>
    </form>
      </tr>
      <tr>
        <td>DOKUMEN SOKONGAN<p>*Slip Gaji atau surat pengesahan pendapatan</p></td>
        <td>:</td>
        <td>
          <input type="file" name="slipgaji">
        </td>
      </tr>
      <tr>
      
        <td>JUMLAH BAYAR ASRAMA</td>
        <td>:</td>
        <td>
          <center><input type="text" name="jumlahbayar" value="" required="" class="form-control"></center>
        </td>

      </tr>
      <tr>
        <td>TAHUN TINGGAL DI ASRAMA</td>
        <td>:</td>
        <td>
          <center><select name="tahun" required="" class="form-control">
            <option>PILIH TAHUN TINGGAL DI ASRAMA</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select></center>
        </td>
      </tr>
    <tr>
    	<td colspan="3">
   	<input class="btn btn-primary" type="submit" name="daftar" value="HANTAR BORANG" onclick="return confirm('Adakah anda pasti ingin mendaftar pelajar ini ?')">
   		</td>
   </tr>
      </form>
    </table>
    </div>

		

		<!-- FOOTER -->
		<footer>
		<div class="container-fluid padding" style="background-color: #000000; bottom: 0; color: white; ">
			<div class="row text-center">
				<div class="col-md-4">
					<br>
					<p class="h5">MEDIA SOSIAL</p>
					<hr class="light">
					<p class="text-left"><a href=""><i class="fa fa-facebook"></i> FACEBOOK</a></p>
					<p class="text-left"><a href=""><i class="fa fa-instagram"></i> INSTAGRAM</a></p>
					<p class="text-left"><a href=""><i class="fa fa-dribbble"></i> PORTAL RASMI KV KUALA SELANGOR</a></p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<p class="h5">ALAMAT</p>
					<hr class="light">
					<p>KOLEJ VOKASIONAL KUALA SELANGOR</p>
					<p>45600 BESTARI JAYA, SELANGOR</p>
				</div>
				
				<div class="col-md-4">
					<hr class="light">
					<p class="h5">HUBUNGI KAMI</p>
					<hr class="light">
					<p>Tel : 03-32718370</p>
					<p>Faks : 03-32718371</p>
					<p>Email : asramakvks@gmail.com</p>
				</div>
				<div class="col-12">
					<hr class="light">
					<p>SISTEM DIBANGUNKAN OLEH FARIS AIMAN HIDAYAT BIN KAMARUDDIN</p>
					<p>PENYELIA PROJEK: PUAN NUR UMIRAH BINTI MAMAT / CIK NUR SHAKINA BINTI IBRAHIM</p>
					<p>&copy; KOLEJ VOKASIONAL KUALA SELANGOR</p>
				</div>
		</div></div>
		</footer>

		 <!-- MODAL ALERT BOX -->
    <div id="notice" class="modal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">MANUAL PENGISIAN BORANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Ini merupakan borang permohonan kemasukkan ke kolej kediaman bagi tahun 2021. Pelajar dikehendaki mengisi borang ini dengan maklumat yang sahih dan tepat. Jika maklumat yang diberi didapati palsu atau meragukan, Pengurusan Kolej Kediaman Kolej Vokasional Kuala Selangor berhak untuk <b>MEMBATALKAN / MENOLAK</b> permohonan anda.
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