<?php
  session_start();
  
  $nokp = $_SESSION['nokp'];
  $nama= $_SESSION['nama'];
  $nokp= $_SESSION['nokp'];
  $emel= $_SESSION['emel'];
  $tel= $_SESSION['tel'];
  $topay= $_SESSION['topay'];
  $money = $topay * 100;
     


  $some_data = array(
    'userSecretKey'=>'lmw49m1w-3ruy-9z8t-4u50-nhtm01vxalms',
    'categoryCode'=>'v4koztjm',
    'billName'=>'Yuran Pelajar '.$nokp.'',
    'billDescription'=>'Yuran Makan Pelajar Kolej Kediaman KVKS',
    'billPriceSetting'=>1,
    'billPayorInfo'=>1,
    'billAmount'=>''.$money.'',
    'billReturnUrl'=>'https://52944ed6b0a7.ngrok.io/sistembayarasrama/return.php',
    'billCallbackUrl'=>'https://52944ed6b0a7.ngrok.io/sistembayarasrama/paystatus.php',
    'billExternalReferenceNo' => 'AFR341DFI',
    'billTo'=>''.$nama.'',
    'billEmail'=>''.$emel.'',
    'billPhone'=>''.$tel.'',
    'billSplitPayment'=>0,
    'billSplitPaymentArgs'=>'',
    'billPaymentChannel'=>'2',
    'billDisplayMerchant'=>1,
    'billContentEmail'=>'Hi '.$nama.', pembayaran anda dengan jumlah RM'.$topay.' telah diterima / diproses. Sila simpan atau screenshot emel ini jika pengesahan diperlukan. Terima kasih atas kerjasama anda 
      - Unit Kediaman Kolej Vokasional Kuala Selangor * Ini adalah mesej automatik dari sistem.
    ',
    'billChargeToCustomer'=>1
  );  

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);  
  curl_close($curl);
  $obj = json_decode($result);
  echo $result;

  $result = str_replace("[","",$result);
  $result = str_replace("]","",$result);

  $obj = json_decode($result);
  $billCode = (string) $obj->BillCode.PHP_EOL;
  $sUrl = "https://toyyibpay.com/".$billCode;

  header('Location:'.$sUrl);

  ?>