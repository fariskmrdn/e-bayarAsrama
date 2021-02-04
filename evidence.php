<?php
    session_start();
    include 'config.php';
    
    $nokp = $_SESSION['nokp'];

    

    $sql = "SELECT * FROM transaksi INNER JOIN pelajar ON pelajar.nokp = transaksi.nokp WHERE pelajar.nokp = '$nokp'";
   // $sql = "SELECT * FROM transaksi WHERE jumlahbayar = '$jumlahbayar'";
    $papar = mysqli_query($connect, $sql);
    $display = mysqli_fetch_array($papar);


   
?>
<!DOCTYPE html>
<html>
<head>
  <title>PENYATA BAYARAN</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="images/KVKS.png">
  <script type="text/javascript">
    function printreceipt() {
      window.print();
    }
  </script>
  <style type="text/css">
    @page:first { /*set the margins for the first page in print mode*/
    margin: auto;
    padding: 16px;
    width: 100%;
    }

    @page { /*set the margins for all following pages (tables) in print mode*/
    size:  auto; 
    margin-top: 10px;
    margin-bottom: 10px;
    }

    #btn1 {
      background-color: green;
      color: white;
      padding: 13px;
    }

     #btn2 {
      background-color: red;
      color: white;
      padding: 13px;
    }

    #logout {
      background-color: red;
      color: white;
      padding: 13px;
    }
  </style>
</head>
<body>

  <center>
    <form method="post" action="evidence.php">
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
        <td colspan="3" style="background-color: blue; color: white; text-align: center;font-size: 22px; font-weight: bolder;">
          PENYATA BAYARAN
        </td>
      </tr>
      <tr>
        <td width="20%"><b>NAMA PELAJAR</b></td>
            <td width="1%">:</td>
            <td width="30%">
              <?php echo $display['nama'];?>
            </td>
      </tr>
      <tr>
            <td width="20%" style="background-color: #f2f2f2;"><b>NO. KAD PENGENALAN</b></td>
            <td width="1%" style="background-color: #f2f2f2;">:</td>
            <td width="30%" style="background-color: #f2f2f2;">
              <?php echo $display['nokp'];?>
            </td>
      </tr>
      <tr>
            <td width="20%"><b>PROGRAM / JURUSAN</b></td>
            <td width="1%">:</td>
            <td width="30%">
              <?php echo $display['program'];?>
            </td>
          </tr>
          <tr>
            <td width="20%" style="background-color: #f2f2f2;"><b>PENGAJIAN</b></td>
            <td width="1%" style="background-color: #f2f2f2;">:</td>
            <td width="30%" style="background-color: #f2f2f2;">
             <?php echo $display['pengajian'];?>
            </td>
          </tr>
          <tr>
            <td width="20%"><b>DORM</b></td>
            <td width="1%">:</td>
            <td width="30%">
             <?php echo $display['dorm'];?>
            </td>
          </tr>
          <tr>
            <td width="20%"><b>JUMLAH YANG DIBAYAR</b></td>
            <td width="1%">:</td>
            <td width="30%">
             RM<?php echo $display['jumlahbayar'];?>
            </td>
          </tr>
          <tr>
            <td colspan="3" style="background-color: blue; color: white; text-align: center;font-size: 22px; font-weight: bolder;">PERAKUAN PEMBAYARAN</td>
          </tr>
          <tr>
            <td colspan="3" style="font-size: 19px; padding: 10px;">
              <p>SAYA <b><?php echo $display['nama'];?></b>, NOMBOR KAD PENGENALAN <b><?php echo $nokp;?></b> DARI PROGRAM / JURUSAN <?php echo $display['program'];?> (PENGAJIAN <?php echo $display['pengajian'];?>) TELAH MELAKUKAN PEMBAYARAN KE UNIT KOLEJ KEDIAMAN KVKS SEJUMLAH <b>RM<?php echo $display['jumlahbayar'];?></b>.<br>
                JIKA PEMBAYARAN INI TIDAK DITERIMA UNIT KOLEJ KEDIAMAN, WARDEN BLOK BERHAK MEMBATALKAN URUSAN PEMBAYARAN INI.<br><br><br>
                
              </p>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              ..................................................................................<br>
                <b><?php echo $display['nama'];?><br>
                <?php echo $display['nokp'];?></b>
            </td>
            <td>
              ..................................................................................<br>
                <b>KETUA WARDEN / WARDEN BLOK / WARDEN BERTUGAS</b>
            </td>
          </tr>
          <tr>
            <td colspan="3"><center>

              <form action="index.php">
              <button onclick="printreceipt()" id="btn1">CETAK</button>
              <a href="logout.php" id="logout">LOG KELUAR</a>
              <!-- <a href="logout.php"><button id="btn2">LOG KELUAR</button></a> -->

            </center>
            </form>

            </td>
          </tr>
    </table>
  </form>
  </center>

</body>
</html>