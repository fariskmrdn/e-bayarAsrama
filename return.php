<?php
session_start();
// $nokp = $_SESSION['nokp'];
include 'config.php';



if (isset($_GET['billcode'])) {

	$nokp = $_SESSION['nokp'];
	$status_id= $_GET['status_id'];
	$billcode=$_GET['billcode'];
	$order_id=$_GET['order_id'];
	$msg=$_GET['msg'];
	$transaction_id=$_GET['transaction_id'];

		$some_data = array(
    	'billCode' =>''.$billcode.'',
    	'billpaymentStatus' =>''.$status_id.''
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
    

	if ($status_id == 3) {
		$SQL = "INSERT INTO trans_history (`nokp`,`tarikh_transaksi`,`status_transaksi`,`order_id`,`transaction_id`,`billcode`,`msg`) VALUES ('".$nokp."',CURRENT_TIMESTAMP,'".$status_id."','".$order_id."','".$transaction_id."','".$billcode."','".$msg."')";
		$Query = mysqli_query($connect,$SQL);

		header("Location: paymentstatus.php?status=".$status_id."&&billcode=".$billcode);
	} else {
		$getdata = "SELECT * FROM pelajar WHERE nokp = $nokp";
		$querydata = mysqli_query($connect,$getdata);
		$fetchdata = mysqli_fetch_array($querydata);
		$bayaranSediaAda = $fetchdata['bayaran'];
		$bayaranDilakukan = $arr_transaction[0]->billpaymentAmount;
		$Math = $bayaranSediaAda - $bayaranDilakukan;



		$SQL1 = "INSERT INTO trans_history (`nokp`,`tarikh_transaksi`,`status_transaksi`,`order_id`,`transaction_id`,`billcode`,`msg`) VALUES ('".$nokp."',CURRENT_TIMESTAMP,'".$status_id."','".$order_id."','".$transaction_id."','".$billcode."','".$msg."')";
		$SQL2 = "UPDATE pelajar SET bayaran = $Math WHERE nokp = $nokp ";
		$Query1 = mysqli_query($connect,$SQL1);
		$Query2 = mysqli_query($connect,$SQL2);

	header("Location: paymentstatus.php?status=".$status_id."&&billcode=".$billcode);
	}

	


}

?>