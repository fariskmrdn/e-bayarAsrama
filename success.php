<?php
    session_start();
    include 'config.php';
    $nokp = $_SESSION['nokp'];

    if (isset($_REQUEST['evidence'])) {
              $evidence = $_REQUEST['evidence'];
    }

    $papar = mysqli_query($connect, "SELECT * FROM pelajar WHERE nokp = '$nokp'");
    $display = mysqli_fetch_array($papar);

    //$sql2 = mysqli_query($connect, "SELECT * F")
    

    if(isset($_POST['hantar'])) {
      $nokp = $_POST['kp'];
      $jumlahbayar = $_POST['jumlahbayar'];
      $tahun = date('Y');
      $resit = $_SESSION['resit'];

      $insertquery = "INSERT INTO `transaksi` (`nokp`,`jumlahbayar`,`tahun`, `resit`) VALUES ('$nokp','$jumlahbayar','$tahun','$resit')";
      $query = mysqli_query($connect, $insertquery);
      header("Location: evidence.php");
    }


?>
<!DOCTYPE html>
<html>
<head>
  <title>SEMAK PEMBAYARAN</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="images/KVKS.png">
</head>
<body>

  <center>
    <form method="post" >
    <table width="70%" id="header" cellspacing="0" cellpadding="12">
      <tr>
          <td width="30%">
          <img src="images/KVKS.png" width="100%">
          </td>
          <td colspan="2">
          <div style="text-align: center;">
            <h3>SISTEM E-BAYAR ASRAMA<br><br>
                KOLEJ VOKASIONAL KUALA SELANGOR<br>
                45600 BESTARI JAYA<br>
                SELANGOR DARUL EHSAN
          </h3></div>
          </td>
      </tr>
      <tr>
        <td colspan="3"><hr></td>
      </tr>
      <tr>
        <td colspan="3" style="background-color: blue; color: white; font-weight: bolder; font-size: 22px; padding: 14px; text-align: center;">
                PENGESAHAN PEMBAYARAN<br>
                *Semak Maklumat Peribadi Anda ! Pastikan Maklumat Adalah Betul.. Jika RALAT Sila Hubungi Warden Blok*
        </td>
      </tr>
      <tr>
            <td width="20%"><b>NAMA PELAJAR</b></td>
            <td width="1%">:</td>
            <td width="30%">
              <input type="text" name="nama" value="<?php echo $display['nama'];?>" readonly size="50">
            </td>
          </tr>
          <tr>
            <td width="20%" style="background-color: #f2f2f2;"><b>NO. KAD PENGENALAN</b></td>
            <td width="1%" style="background-color: #f2f2f2;">:</td>
            <td width="30%" style="background-color: #f2f2f2;">
              <input type="text" name="kp" value="<?php echo $display['nokp'];?>"  size="50">
            </td>
          </tr>
          <tr>
            <td width="20%"><b>PROGRAM / JURUSAN</b></td>
            <td width="1%">:</td>
            <td width="30%">
              <input type="text" name="program" value="<?php echo $display['program'];?>" readonly size="50">
            </td>
          </tr>
          <tr>
            <td width="20%" style="background-color: #f2f2f2;"><b>PENGAJIAN</b></td>
            <td width="1%" style="background-color: #f2f2f2;">:</td>
            <td width="30%" style="background-color: #f2f2f2;">
              <input type="text" name="pengajian" value="<?php echo $display['pengajian'];?>" readonly size="50">
            </td>
          </tr>
          <tr>
            <td width="20%"><b>DORM</b></td>
            <td width="1%">:</td>
            <td width="30%">
              <input type="text" name="dorm" value="<?php echo $display['dorm'];?>" readonly size="50">
              <br>
            </td>
          </tr>
          <tr>
            <td colspan="3" style="background-color: blue; color: white; font-weight: bolder; font-size: 22px; padding: 14px; text-align: center;">MAKLUMAT PEMBAYARAN</td>
          </tr>
          <tr>
            <td width="20%"><b>JUMLAH BAYAR</b></td>
            <td width="1%">:</td>
            <td width="30%">
              <input type="text" name="jumlahbayar" size="50" placeholder="Masukkan Semula Nilai Bayar tanpa RM">
              <br>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <center><input type="submit" name="hantar" value="SAHKAN PEMBAYARAN" style="background-color: green; padding: 12px; font-size: 18px; color: white;"></center>
            </td>
          </tr>
    </table>
  </form>
  </center>

</body>
</html>