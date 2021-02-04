<!DOCTYPE html>
<html>
<head>
	<title>BORANG KEMASUKKAN KE ASRAMA</title>
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
				<li class="nav-item"><a href="student_login.php" class="nav-link" style="color: white;">PELAJAR</a></li>
				<li class="nav-item"><a href="warden_login.php" class="nav-link" style="color: white;">| WARDEN</a></li>
				<li class="nav-item"><a href="registrationform.php" class="nav-link" style="color: white;">| DAFTAR ASRAMA</a></li>
				<li class="nav-item"><a href="https://forms.gle/vo2foSH17zoeH1Qm7" class="nav-link" style="color: white;">| BORANG MAKLUM BALAS </a></li>
			</ul>
			</div>
		</nav>

		<!-- DASHBOARD INDEX -->
		<div class="container-fluid">

			<div class="row jumbotron" style="background-color: #FFD700;">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6 col-xl-6">
					<p class="h2">Pembayaran Yuran Lebih Mudah Dengan<br>Sistem E-Bayar Asrama<br><br>
						<p>
							<button type="button" class="btn btn-outline-dark" onclick="mybtn()">Log Masuk Sistem SEKARANG
							</button>
						</p>
					</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-6 col-xl-6">
					<img src="images/icon.png" class="img-fluid">

				</div>
			</div>
			
		</div>

		<!-- SECTION 1 -->
		<div class="container-fluid padding justify-content-center">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img src="images/SECURE.png" class="img-fluid" width="150">
					<br><br>
					<h3>TRANSAKSI YANG SELAMAT</h3>
					<p>Urusan Transaksi Anda Selamat Dan Terpelihara</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img src="images/rtu.png" class="img-fluid" width="200">
					<br><br><br>
					<h3>MUDAH DAN PANTAS</h3>
					<p>Sistem Yang Mudah, Pantas Dan Terus Guna</p>
				</div>
				<div class="col-sm-6 col-md-4">
					<img src="images/installment.png" class="img-fluid" width="200">
					<br><br><br>
					<h3>BAYARAN ANSURAN</h3>
					<p>Bayar Secara Ansuran Tanpa Faedah Atau Caj Tambahan</p>
				</div>
			</div>
		</div>

		<div class="container-fluid padding justify-content-center padding" style="background-color: #FFD700;">
			<div class="row text-center padding">
				<div class="col-12">
					<br><br>
					<img src="images/mymockup.png" class="img-fluid" width="600">
					<br><br>
					<h3>MESRA PENGGUNA</h3>
					<p>Sistem Boleh Diakses Walau Dimana Anda Berada!</p>
					<br>
					<br>
				</div>
			</div>
		</div>

		<div class="container-fluid padding justify-content-center padding" style="background-color: #FFD700;">
			<div class="row text-center padding">
				<div class="col-12">

					<br><br>
					<div class="embed-responsive embed-responsive-1by1" >
					<video class="embed-responsive-item" width="140" controls autoplay="">
 							<source src="videos/SistemEBayar.mp4" type="video/mp4">
  
					</video>
				</div>

					<br><br><br>
				</div>
			</div>
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
        <h5 class="modal-title">SISTEM SEDANG DIKEMASKINI !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Sistem E-Bayar Asrama sedang dikemaskini bertujuan untuk meningkatkan prestasi kebolehgunaan sistem. Jika berlaku sebarang ralat, sila hubungi Pejabat Penyelia Asrama untuk bantuan. Kesabaran dan maklum balas anda amat dihargai. Terima Kasih
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