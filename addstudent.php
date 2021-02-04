<?php
	include 'config.php';
	session_start();
	$user = $_SESSION['user'];

	if (isset($_POST['daftar'])) {
		$pndftr = $_POST['pndftr'];
		$namapelajar = $_POST['namapelajar'];
		$nokp = $_POST['nokp'];
		$pswd = $_POST['pswd'];
		$program = $_POST['program'];
		$pengajian = $_POST['pengajian'];
		$dorm = $_POST['dorm'];
		$byr = $_POST['byr'];
		$thn = $_POST['tahun'];

		$sql = "INSERT INTO `pelajar` (`nama`, `nokp`, `pswd`, `bayaran`, `program`, `dorm`, `pengajian`, `pendaftar`,`tahun`) VALUES ('$namapelajar', '$nokp', '$pswd', '$byr', '$program', '$dorm', '$pengajian', '$pndftr','$thn')";

		mysqli_query($connect,$sql);

		header("Location: warden_dashboard.php");
		
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>BORANG PENDAFTARAN PELAJAR ASRAMA</title>
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
        <li class="nav-item"><a href="profileblok.php" class="nav-link" style="color: white;">DASHBOARD</a></li>
        <li class="nav-item"><a href="addstudent.php" class="nav-link" style="color: white;">PROFIL BLOK</a></li>
        <li class="nav-item"><a href="transaction.php" class="nav-link" style="color: white;">TRANSAKSI TERKINI</a></li>
        <li class="nav-item"><a href="warden_tunggakan.php" class="nav-link" style="color: white;">TUNGGAKAN</a></li>
      </ul>
      </div>
    </nav>


    <div class="container-fluid" style="background-color: #FFD700;">
    <div class="row mx-auto">
     
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 padding">
        <br>
        <p class="lead padding">BORANG DAFTAR PELAJAR ASRAMA</p>
        <p><button type="button" class="btn btn-outline-dark" onclick="window.location='warden_dashboard.php'">Kembali Ke Dashboard</button></p>
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
        <td colspan="3" scope="col" style="background-color: #FFD700;"><h5 style="text-align: center;">BORANG MASUK</h3></td>
      </tr>
      </thead>
      <form method="post">
      	<tr>    
        <td>PENDAFTAR PELAJAR</td>
        <td>:</td>
        <td>
          <center><input type="text" name="pndftr" value="<?php echo $user; ?>" readonly class="form-control"></center>
        </td>
      </tr>

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
          <option>------BLOK UTHMAN------</option>
          <option value="UTHMAN 1">UTHMAN 1</option>
          <option value="UTHMAN 2">UTHMAN 2</option>
          <option value="UTHMAN 3">UTHMAN 3</option>
          <option value="UTHMAN 4">UTHMAN 4</option>
          <option value="UTHMAN 5">UTHMAN 5</option>
          <option value="UTHMAN 6">UTHMAN 6</option>
          <option value="UTHMAN 7">UTHMAN 7</option>
          <option value="UTHMAN 8">UTHMAN 8</option>
          <option>------BLOK ALI------</option>
          <option value="ALI 1">ALI 1</option>
          <option value="ALI 2">ALI 2</option>
          <option value="ALI 3">ALI 3</option>
          <option value="ALI 4">ALI 4</option>
          <option value="ALI 5">ALI 5</option>
          <option value="ALI 6">ALI 6</option>
          <option value="ALI 7">ALI 7</option>
          <option value="ALI 8">ALI 8</option>
          <option>------BLOK SITI HAJAR------</option>
          <option value="SITI HAJAR 1">SH 1</option>
          <option value="SITI HAJAR 2">SH 2</option>
          <option value="SITI HAJAR 3">SH 3</option>
          <option value="SITI HAJAR 4">SH 4</option>
          <option value="SITI HAJAR 5">SH 5</option>
          <option value="SITI HAJAR 6">SH 6</option>
          <option value="SITI HAJAR 7">SH 7</option>
          <option value="SITI HAJAR 8">SH 8</option>
          <option>------BLOK SITI KHADIJAH------</option>
          <option value="SITI KHADIJAH 1">SK 1</option>
          <option value="SITI KHADIJAH 2">SK 2</option>
          <option value="SITI KHADIJAH 3">SK 3</option>
          <option value="SITI KHADIJAH 4">SK 4</option>
          <option value="SITI KHADIJAH 5">SK 5</option>
          <option value="SITI KHADIJAH 6">SK 6</option>
          <option value="SITI KHADIJAH 7">SK 7</option>
          <option value="SITI KHADIJAH 8">SK 8</option>
          <option>------BLOK SITI AISYAH------</option>
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

      <tr>
        <td>JUMLAH PEMBAYARAN</td>
        <td>:</td>
        <td>
          <center><select name="byr" required="" class="form-control">
            <option>PILIH JUMLAH BAYAR</option>
            <option value="250">RM250</option>
            <option value="750">RM750 </option>
          </select></center>
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