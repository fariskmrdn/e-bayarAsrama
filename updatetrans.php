<?php

	session_start();
	include 'config.php';
	
	$nokp = $_SESSION['nokp'];
	$mysql = "SELECT * FROM trans_history WHERE nokp = '$nokp'";
	$myquery = mysqli_query($connect,$mysql);
	$myfetch = mysqli_fetch_array($myquery);
	$query2 = "SELECT * FROM pelajar WHERE nokp = '$nokp'";
	$query2 = mysqli_query($connect,$query2);
	$fetch2 = mysqli_fetch_array($query2);

	if (isset($_POST['updatebayar'])) {
		$terkini = $_POST['answer'];
		$Update = "UPDATE pelajar SET bayaran = '$terkini' WHERE nokp = '$nokp'";
		$QueryUpdate = mysqli_query($connect,$Update);
		echo 
		"
			<script>
				window.alert('Transaksi telah berjaya dikemaskini! Jika berlaku ralat, kemaskini bayaran pelajar di halaman Profil Asrama.');
				window.location = 'warden_dashboard.php';
			</script>
		";
	}

	//ToyyibPay Integrate 
	$some_data = array(
    'billCode' => $myfetch['billCode'],
    'billpaymentStatus' => $myfetch['status_transaksi']
  	);  

  	$curl = curl_init();

  	curl_setopt($curl, CURLOPT_POST, 1);
  	curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/getBillTransactions');  
  	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  	curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  	$result = curl_exec($curl);
  	$info = curl_getinfo($curl);  
  	curl_close($curl);
  	//arr transaction untuk decode data dalam JSON
  	$arr_transaction = json_decode($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>KEMASKINI REKOD TRANSAKSI</title>
	<link rel="icon" href="images/KVKS.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	#blinker {
		animation: blinker 0.6s linear infinite;
		color: red;
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
		height: 40px;
		border-radius: 20px;
		padding: 12px 14px;
		color: black;

	}

	#buttonquery:hover {
		border-color: #8caeed;
		height: 40px;
		border-radius: 20px;
		padding: 12px 14px;
		color: black;
		background-color: white;
	}


</style>
<body bgcolor="#f2f2f2">

	<center>
   
      	<td><center>
      		<div style="background-color: #f2f2f2;">
      			<h3>KALKULATOR PENGIRAAN BAKI TERTUNGGAK</h3>
      			<form name="kalkulatorringkas" method="post">
      				J/TUNGGAK : <input type="text" name="tngk" value="<?=$fetch2['bayaran']?>" readonly><br><br>
      				J/TRANSAKSI : <input type="text" name="trans"
      				value="<?php echo $arr_transaction[0]->billpaymentAmount; ?>" readonly><br><br>
      				<input type="submit" name="kira" onclick="startKira();return false;" value="TEKAN UNTUK KIRA BAKI TERKINI" style="width: 50%; height: 30px;">
             <br><br>
             <b>BAKI TERTUNGGAK : RM<input type="text" name="answer" readonly="" style="border:none; font-weight: bolder; background-color: #f2f2f2;" size="3"></b><br><br>
             <input type="submit" name="updatebayar" value="SAHKAN & KEMASKINI PENYATA">
			 
             </form>

             
             <script type="text/javascript">
                function startKira() {
                  var input1,input2,tolak;
                  input1 = parseInt(document.kalkulatorringkas.tngk.value);
                  input2 = parseInt(document.kalkulatorringkas.trans.value);
                  tolak = input1-input2;
                  document.kalkulatorringkas.answer.value=tolak;
                  return true;
                }
              </script> -->
      			
      	<!-- 	</div>
      	</center>
      	</td> --> 
      </tr>
  </table>
</center>

             
</body>
</html>