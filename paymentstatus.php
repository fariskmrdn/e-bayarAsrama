<?php
session_start();
include 'config.php';
$nokp = $_SESSION['nokp'];

//Fetch and Get Data Pelajar
$SQL = "SELECT * FROM pelajar WHERE nokp = '$nokp'";
$Query1 = mysqli_query($connect,$SQL);
$Fetch = mysqli_fetch_array($Query1);
//Fetch and get transaction history
$SQL2 = "SELECT * FROM `trans_history` WHERE nokp = '$nokp'";
$Query2 = mysqli_query($connect, $SQL2);
$Fetch2 = mysqli_fetch_array($Query2);

switch($_GET['status']){
	case '1': $status = 'DITERIMA'; break;
	case '2': $status = 'SEDANG DIPROSES'; break;
	case '3': $status = 'GAGAL'; break;
	default : $status = '!error'; break;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>STATUS TRANSAKSI</title>
	<link rel="icon" href="images/KVKS.png">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body bgcolor="#f2f2f2">
	<center>
	<img src="images/KVKS.png" width="30%"><img src="images/toyyibpay.png">
	<h4 class="display-4">TRANSAKSI ANDA <?=$status?></h4>
	<table>
		<tr>
			<td colspan="3" style="padding: 8px; text-align: center; font-size: 30px;">MAKLUMAT PEMBAYAR</td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>NAMA PEMBAYAR</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><?=$Fetch['nama']?></td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>NO KAD PENGENALAN</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><?=$Fetch['nokp']?></td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>PROGRAM / PENGAJIAN</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><?=$Fetch['pengajian']?> <?=$Fetch['program']?></td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>DORM</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><?=$Fetch['dorm']?></td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>TARIKH TRANSAKSI</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><?php echo $Fetch2['tarikh_transaksi'];?></td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>ID TRANSAKSI</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><?=$Fetch2['transaction_id']?></td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>KOD BILL</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><?=$Fetch2['billCode']?></td>
		</tr>
		<tr>
			<td style="padding: 8px;"><strong>STATUS TRANSAKSI</strong></td>
			<td style="padding: 8px;">:</td>
			<td style="padding: 8px;"><strong><?=$status?></strong></td>
		</tr>
		<tr>
			<td style="padding: 8px;" colspan="3">
				<p>
					Sila screenshot sebagai bukti pembayaran anda dan lampirkan jika diperlukan. Terima Kasih
				</p>
			</td>
		</tr>
	</table>
	<p>
		<a href="student_dashboard.php">Kembali ke Dashboard Pelajar</a>
	</p>
		
	</center>
	

</body>
</html>

