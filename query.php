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
	<title>SYSTEM DASHBOARD</title>
	<link rel="icon" href="images/KVKS.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	#blinker {
		animation: blinker 0.6s linear infinite;
		color: white;
		font-size: 22px;
		font-weight: bolder;
	}

	@keyframes blinker {
		50% {opacity: 0;}
	}

	#btn {
		display: block; background-color: blue; padding: 20px; color: white; width: 97%; text-align: center;
	}

	#btn:hover {
		padding: 30px;
		background-color: white;
		border-color: blue;
		color: black;
		border:2px;
		font-weight: bolder;
		font-size: 20px;
	}

	#hoverfunc {
		text-decoration: none;
		color: black;
	}

	#hoverfunc:hover {
		color: blue;
		font-weight: bolder;
		padding: 12px;
	}

	#buttonquery {
		background-color: #8caeed;
		border-radius: 20px;
		padding: 5px 5px;
		color: black;
    font-size: 15px;
    text-align: center;
    margin-top: -12px;
	}

/*	#buttonquery:hover {
		border-color: #8caeed;
		height: 40px;
		border-radius: 20px;
		padding: 12px 14px;
		color: black;
		background-color: white;
	}*/


</style>
<body bgcolor="#f2f2f2">

	<center>
    <table width="70%" id="header" style="background-color: white;">
      <tr>
          <td width="30%">
          <img src="images/KVKS.png" width="100%">
          </td>
          <td>
          <div style="text-align: center;">
            <h3>SISTEM DASHBOARD<br><br>
                SISTEM E-BAYAR ASRAMA<br>
                WARDEN : <b style="color: blue;"><?php echo $display['nama']; ?></b><br>
               <!-- <a href="logout.php" style="text-decoration: none;">LOG KELUAR</a> -->
          </h3></div>
          </td>
      </tr>
      <tr>
        <td colspan="2"><hr></td>
      </tr>
      <tr>
      	<td colspan="2" style="list-style: none;">
      		<a id="hoverfunc" href="profileblok.php"><li style="float: left; padding: 12px; font-size: 16px;">PROFIL BLOK</li></a>
      		<a id="hoverfunc" href="addstudent.php"><li style="float: left; padding: 12px; font-size: 16px;">TAMBAH PELAJAR</li></a>
      		<a id="hoverfunc" href="transaction.php"><li style="float: left; padding: 12px; font-size: 16px;">TRANSAKSI TERKINI</li></a>
      		<a href="logout.php" style="text-decoration: none; float: right; padding: 12px; font-size: 16px;">LOG KELUAR</a>
      	</td>
      </tr>
      <tr>
      	<td colspan="2"><br><br><br>
      		<center>
      		<table border="1" cellspacing="0" cellpadding="12" width="80%" style="border-radius: 15px;">
      			<tr>
      				<td colspan="6" style="text-align: center; background-color: blue; color: white; font-weight: bolder;"><b id="blinker">PELAJAR YANG TELAH MENYELESAIKAN PEMBAYARAN</b>
      					<br><?php echo $msg; ?><br>
                <form method="post">
      					<input type="text" name="search" placeholder="Masukkan No.KP tanpa (-) untuk carian" size="60" style="height: 30px; border-radius: 6px;text-align: center; border-color: #8caeed;color: black;">
      					<input type="submit" name="query" value="SEMAK" id="buttonquery">
              </form>
      				</td>
      			</tr>
      			<tr>
      				<td width="5%">BIL</td>
      				<td>NAMA</td>
      				<td>NO. KP</td>
      				<td>PROGRAM</td>
      				<td>PENGAJIAN</td>
      				<td>DORM</td>
      			</tr>
      			<?php
      			if (isset($_POST['query'])) {
                $search = $_POST['search'];
                $querysearch = mysqli_query($connect, "SELECT * FROM pelajar WHERE nokp LIKE '%$search%' AND bayaran = 0");
                $bil = 1;

                
                while($res=mysqli_fetch_array($querysearch)){
                  echo "
                    <tr>
              <td width='5%' style='background-color:#f2f2f2;'>".$bil++."</td>
              <td style='background-color:#f2f2f2;'>".$res['nama']."</td>
              <td style='background-color:#f2f2f2;'>".$res['nokp']."</td>
              <td style='background-color:#f2f2f2;'>".$res['program']."</td>
              <td style='background-color:#f2f2f2;'>".$res['pengajian']."</td>
              <td style='background-color:#f2f2f2;'>".$res['dorm']."</td>
            </tr>
                  ";
                }
              
    
              }
      			?>
      		</table>
      	</center>
      	</td>
      </tr>
      </table>

</body>
</html>