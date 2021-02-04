<?php


  $mydata = array(
            'categoryCode'=>'e23pfxu6',
            'billCode'=>'AsramaKVKS',
            'billpaymentAmount' => '2.00',
            'billpaymentPayorName' => 'Sumayyah',
            
  );

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_POST, 0);
  curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/AsramaKVKS');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $mydata);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);  
  curl_close($curl);
  $obj = json_decode($result);
  echo $result;

