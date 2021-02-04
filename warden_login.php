<?php
	include 'config.php';
	session_start();
  //condition statement for input post
	if (isset($_POST['login'])) {
		$user = mysqli_real_escape_string($connect,$_POST['user']);
		$pswd = mysqli_real_escape_string($connect,$_POST['pswd']);

		$sql = "SELECT * FROM warden WHERE idwarden = '$user' AND password = '$pswd'";
		$query = mysqli_query($connect, $sql);
    //Authorization statement
		if (mysqli_num_rows($query)) {
			$_SESSION['user'] = $user;
			echo "<script>
					alert('Log Masuk Ke Sistem Berjaya');
					window.location = 'warden_dashboard.php'
			</script>
			";
		} else {
			echo "<script>alert('Log Masuk Gagal !'); window.location = 'warden_login.php'</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOG MASUK WARDEN</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="images/KVKS.png">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/KVKS.png">

  <style type="text/css">
    body {
    font-family: 'Oxygen', sans-serif;

  }
  </style>

  <div class="container-fluid">

    <div class="row mx-auto justify-content-center">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 padding">
        
        <img src="images/KVKS.png" class="img-fluid" width="250">

      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 padding">
        <br>
        <p class="lead padding">SISTEM E-BAYAR ASRAMA</p>
        <p>LOG MASUK WARDEN</p>
      </div>
    </div>
    
  </div>
<br><br>
  <div class="container-fluid" onsubmit="return validateform();">
    <div class="row mx-auto justify-content-center padding">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 padding">
      <form method="post" name="loginform" on>
        <div class="form-group padding">
          <p>ID PENGGUNA</p>
          <input type="text" name="user" class="form-control" placeholder="Masukkan ID Pengguna">
        </div>
        <div class="form-group padding">
          <p>KATA LALUAN</p>
          <input type="password" name="pswd" class="form-control" placeholder="Masukkan Kata Laluan">
        </div>
        <button type="submit" class="btn btn-primary" name="login">LOG MASUK</button>
        <button type="reset" class="btn btn-warning">RESET</button>
      </form>
      </div>
    </div>
  </div>


   <script type="text/javascript">
      //JavaScript Function untuk validate form
      function validateform() {
          var user = document.forms["loginform"]["user"];
          var pswd = document.forms["loginform"]["pswd"];
          var valid =  /[^0-9]/ ; //expression untuk nombor sahaja

          if (user.value == '') {
              window.alert('Masukkan ID Pengguna Anda Terlebih Dahulu !');
              user.focus();
              return false;
          } else {
             
          }

          if (pswd.value == '') {
              window.alert('Masukkan Kata Laluan Anda!');
              pswd.focus();
              return false;
          } else {
              if (valid.test(pswd.value)) {
                window.alert('Kata Laluan Anda Perlu Mengandungi Angka Sahaja !');
                return false;
              }
          }

          return true;
      //Tutup function    
      }



  </script>

</body>
</html>