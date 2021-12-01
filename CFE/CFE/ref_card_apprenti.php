<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';
  
  echo '
  <div class="col-xl-4 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total apprenti</h5>';


              $qu = "SELECT COUNT(id) as idd FROM users";
              $res = mysqli_query($conn,$qu);
              $resChe = mysqli_num_rows($res);
              if($resChe > 0){
                while($row = mysqli_fetch_assoc($res)){
                  echo '<span class="h2 font-weight-bold mb-0">'.$row["idd"].' apprentis</span>';
                }
              }


          echo '</div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
              <i class="ni ni-active-40"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Nbr non réglé</h5>';


              $qu = "SELECT COUNT(id) as idd FROM users WHERE situation = 'Non réglé' AND date_inscription > (NOW() - INTERVAL 1 MONTH)";
              $res = mysqli_query($conn,$qu);
              $resChe = mysqli_num_rows($res);
              if($resChe > 0){
                while($row = mysqli_fetch_assoc($res)){
                  echo '<span class="h2 font-weight-bold mb-0">'.$row["idd"].'</button> apprentis';
                }
              }

          echo '</div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="ni ni-chart-pie-35"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total non réglé</h5>';


              $qu = "SELECT SUM(prix_formation) as prix FROM users WHERE situation = 'Non réglé' AND date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')";
              $res = mysqli_query($conn,$qu);
              $resChe = mysqli_num_rows($res);
              if($resChe > 0){
                while($row = mysqli_fetch_assoc($res)){
                  echo '<span class="h2 font-weight-bold mb-0">'.$row["prix"].' DHS</span>';
                }
              }

          echo '</div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
              <i class="ni ni-money-coins"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';
?>