<?php
    include 'config.php';
    session_start();

    $user = $_SESSION['user'];
    $papar = mysqli_query($connect, "SELECT * FROM warden WHERE idwarden='$user'");
    $display = mysqli_fetch_array($papar);

    if (isset($_POST['query'])) {
        $searchbar = $_POST['searchbar'];

        $searchfunc = mysqli_query($connect, "SELECT * FROM transaksi WHERE nokp LIKE '%$searchbar%'");

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>TRANSACTION</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<link rel="icon" href="images/KVKS.png">

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
		height: 40px;
		border-radius: 20px;
		
		color: black;
        margin-left: 20px;

	}


    #switch {
         position: relative;
         display: inline-block;
         width: 60px;
         height: 34px;
    }

    #switch input { 
        opacity: 0;
        width: 0;
        height: 0;
        }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: red;
        -webkit-transition: .4s;
        transition: .4s;
        }

         .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: green;
        }

        

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }


    /* Rounded sliders */
    .slider.round {
         border-radius: 34px;
        }

    .slider.round:before {
        border-radius: 50%;
    }



</style>
<body bgcolor="#f2f2f2">

	<center>
    <table width="70%" id="header" style="background-color: white;">
      <tr>
          <td width="30%">
          <img src="images/KVKS.png" width="60%">
          </td>
          <td colspan="2">
          <div style="text-align: center;">
            <h3>TRANSAKSI TERKINI<br><br>
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
            <a id="hoverfunc" href="warden_dashboard.php"><li style="float: left; padding: 12px; font-size: 16px;">LAMAN UTAMA</li></a>
      		<a id="hoverfunc" href="profileblok.php"><li style="float: left; padding: 12px; font-size: 16px;">PROFIL BLOK</li></a>
      		<a id="hoverfunc" href="addstudent.php"><li style="float: left; padding: 12px; font-size: 16px;">TAMBAH PELAJAR</li></a>
      		<a id="hoverfunc" href=""><li style="float: left; padding: 12px; font-size: 16px;">TRANSAKSI TERKINI</li></a>
      		<a href="logout.php" style="text-decoration: none; float: right; padding: 12px; font-size: 16px;">LOG KELUAR</a>
      	</td>
      </tr>
      <tr>
          <td colspan="2">
            <center>
              <table border="1" cellpadding="12" cellspacing="0" width="100%">
                <tr>
                    <td colspan="7" style="text-align: center; font-size: 25px;font-weight: bolder;background-color: blue;color: white;">TRANSAKSI TERKINI<br><br>
                      <form method="post" action="transaction_query.php">
                        <input type="text" name="searchbar" placeholder="Masukkan No.KP Tanpa (-) Untuk Carian" size="70"style="height: 30px; border-radius: 6px;text-align: center; border-color: #8caeed;color: black;"><input type="submit" name="query" value="SEMAK" id="buttonquery">
                      </form>

                    </td>
                </tr>
                  <tr>
                      <th>NAMA PELAJAR</th>
                      <th>NO. KAD PENGENALAN</th>
                      <th>PROGRAM / JURUSAN</th>
                      <th>PENGAJIAN</th>
                      <th>DORM</th>
                      <th>JUMLAH DIBAYAR</th>
                      <th>TINDAKAN</th>
                  </tr>
                  <?php
                  
                  if (isset($_POST['query'])) {
                      $searchbar = $_POST['searchbar'];
                      $bil =1;
                      $searchfunc = mysqli_query($connect, "SELECT * FROM transaksi INNER JOIN pelajar ON pelajar.nokp = transaksi.nokp WHERE pelajar.nokp = transaksi.nokp LIKE '%$searchbar%'");
                      while ($res = mysqli_fetch_array($searchfunc)) {
                        $bil += 1;
                        echo "
                          <tr>
                                <td>".$res['nama']."</td>
                                <td>".$res['nokp']."</td>
                                <td>".$res['program']."</td>
                                <td>".$res['pengajian']."</td>
                                <td>".$res['dorm']."</td>
                                <td>".$res['jumlahbayar']."</td>

                                <td>
                                <form>
                                <label id='switch'>
                              <input type='checkbox' data='".$bil."' onclick='checker(".$bil.", \"".$res['nokp']."\"".")' >
                                <span class='slider round'></span>
                                </label>
                                </form>

                                </td>
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

      <script type="text/javascript">
         function checker(id, nokp){
          console.log(nokp);
            var checkbox = document.querySelector('input[data="'+id+'"]');

            if (checkbox.checked) {
                window.location='updatestatus.php?nokp=' + nokp;
                window.alert('Pembayaran Telah Disahkan ! Sila kemaskini rekod pelajar');
            }
            // return false;
                                            
          }
      </script>


</body>
</html>