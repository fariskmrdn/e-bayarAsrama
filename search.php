<?php
    include 'config.php';
    session_start();

    $user = $_SESSION['user'];
    $papar = mysqli_query($connect, "SELECT * FROM warden WHERE idwarden='$user'");
    $display = mysqli_fetch_array($papar);

     if (isset($_POST['search'])) {
            $searchNokp = $_POST['searchbar'];

            $Search = "SELECT * FROM trans_history INNER JOIN pelajar ON pelajar.nokp = trans_history.nokp WHERE pelajar.nokp = trans_history.nokp LIKE '%".$searchNokp."%' ";
            $QuerySearch = mysqli_query($connect,$Search);
            
        }

?>
<!DOCTYPE html>
<html>
<head>
  <title>UPDATE TRANSACTION TEMPORARY DOWN</title>
  <link rel="icon" href="images/KVKS.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   
</head><!-- 
<style type="text/css">
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
</style> -->
<body>
  <!-- NAVIGATION BAR USING BOOTSTRAP FRAMEWORK -->
    <nav class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #000000; padding: 1rem; ">
      <img src="images/asrama1.png" class="navbar-brand img-fluid" width="270">

      
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span style="background-color: white;" class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="profileblok.php" class="nav-link" style="color: white;">PROFIL BLOK</a></li>
        <li class="nav-item"><a href="addstudent.php" class="nav-link" style="color: white;">TAMBAH PELAJAR</a></li>
        <li class="nav-item"><a href="transaction.php" class="nav-link" style="color: white;">TRANSAKSI TERKINI</a></li>
        <li class="nav-item"><a href="warden_tunggakan.php" class="nav-link" style="color: white;">TUNGGAKAN</a></li>
      </ul>
      </div>
    </nav>


    <div class="container-fluid" style="background-color: #FFD700;">
    <div class="row mx-auto">
     
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 padding">
        <br>
        <p class="lead padding">TRANSAKSI TERKINI</p>
        <p><button type="button" class="btn btn-outline-dark" onclick="window.location='warden_dashboard.php'">Kembali Ke Dashboard</button></p>
      </div>
      <div class="col-12">
        <hr>
      </div>
    </div>
  </div>

 <!--  <div class="container-fluid">
    <div class="row mx-auto">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12 col-xl-12"> -->

    <div class="table-responsive">
    <table class="table table-striped table-md">
      <thead class="thead-dark">
      <tr>
        <td colspan="6" scope="col" style="background-color: #FFD700;"><h5 style="text-align: center;">TRANSAKSI</h3></td>
      </tr>
     
      <tr><form method="post" action="search.php">
        <center><td colspan="5" scope="col" style="background-color: #FFD700;">
          
            <input type="text" name="searchbar" class="form-control" placeholder="Masukkan No Kad Pengenalan Pelajar Tanpa (-)">

        </td></center>
        <td  scope="col" style="background-color: #FFD700;">
            <input type="submit" name="search" value="CARI" class="btn btn-primary">
        </td>
          </form>
       
      </tr>
      </thead>
      <tr>
                      <th>NAMA PELAJAR</th>
                      <th>NO. KAD PENGENALAN</th>
                      <th>PROGRAM</th>
                      <th>DORM</th>
                      <th>ID TRANSAKSI</th>
                      <th>TARIKH</th>
                  </tr>
                  <?php
                    
                    while ($row=mysqli_fetch_array($QuerySearch)) {
                      $bil += 1;
                        echo "
                            <tr>
                               <td>".$row['nama']."</td>
                                <td>".$row['nokp']."</td>
                                <td>".$row['pengajian']." ".$row['program']."</td>
                                <td>".$row['dorm']."</td>
                                <td>".$row['transaction_id']."</td>
                                <td>".$row['tarikh_transaksi']."</td>


                          
                           </tr>
                        ";
                    }
                  ?>
      
    </table>
    </div>
    
    <!-- MODAL ALERT BOX -->
    <div id="notice" class="modal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">PILIHAN DILUMPUHKAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Aplikasi pengemaskinian data transaksi dan pelajar dalam pengujian pengendalian ralat dan pepijat. Aplikasi pengemaskinian tidak dapat digunakan buat masa ini. Harap Maklum.
        </p>
      </div>
     
      </div>
    </div>
  </div>


    <!-- </div>


    </div>
  </div>
 -->
  <!-- <br><br>
  <footer class="footer fixed-bottom">
    <div class="container-fluid" style="background-color: #9e9e9e;"> 
      <div class="row padding">
        <div class="col-12">
          <br>
          <p class="h5">PERHATIAN</p>
          <hr class="light">
          <p>Sistem dalam fasa pengujian pengendalian ralat! Jika berlaku sebarang permasalah, sila berhubung dengan Ketua Warden (Puan Nor Azura binti Mahat) atau mana-mana warden untuk tindakan lanjut</p>
        </div>
      </div>
    </div>
  </footer>
 -->




    <!-- Bootstrap JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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
   <script type="text/javascript">
    $(document).ready(function(){
      $("#notice").modal('show');
    });
  </script>
</body>
</html>