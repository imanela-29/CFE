<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

echo '
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total prévu</h5>';


                        $qu = "SELECT SUM(prix_formation) as prix FROM users WHERE date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01') OR (date_reinscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')) ";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '<span class="h2 font-weight-bold mb-0">'.$row["prix"].' DHS</span>';
                          }
                        }

echo'
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Mois actuel</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Caisse</h5>';


                        $qu = "SELECT SUM(prix_formation) as prix FROM users WHERE situation = 'Réglé' AND date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')  OR (date_reinscription >= DATE_FORMAT(NOW() ,'%Y-%m-01'))";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '<span class="h2 font-weight-bold mb-0">'.$row["prix"].' DHS</span>';
                          }
                        }

echo '
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Mois actuel</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Non réglé</h5>';
                      

                        $qu = "SELECT SUM(prix_formation) as prix FROM users WHERE situation = 'Non réglé' AND (date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')) ";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '<span class="h2 font-weight-bold mb-0">'.$row["prix"].' DHS</span>';
                          }
                        }

echo '
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Mois actuel</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Bénefices</h5>';

                        $qu1 = "SELECT  SUM(prix_formation) as prix1 FROM users WHERE situation = 'Réglé' AND (date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')) OR (date_reinscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')) ";
                        $qu2 = "SELECT SUM(prix) as prix2 FROM charge WHERE date_charge >= DATE_FORMAT(NOW() ,'%Y-%m-01')";
                        $qu3 = "SELECT SUM(prix) as prix3 FROM formateur WHERE situation = 'Réglé' AND (date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01'))";

                        $res1 = mysqli_query($conn,$qu1);
                        $res2 = mysqli_query($conn,$qu2);
                        $res3 = mysqli_query($conn,$qu3);
                        
                        $resChe1 = mysqli_num_rows($res1);
                        $resChe2 = mysqli_num_rows($res2);
                        $resChe3 = mysqli_num_rows($res3);
                        
                        if($resChe1 > 0){
                          if($resChe2 > 0){
                            if($resChe3 > 0){
                              while($row1 = mysqli_fetch_assoc($res1)){
                                while($row2 = mysqli_fetch_assoc($res2)){
                                  while($row3 = mysqli_fetch_assoc($res3)){
                                    echo '<span class="h2 font-weight-bold mb-0"> ' . ($row1["prix1"] - ( $row2["prix2"] + $row3["prix3"] )) .' DHS </span>';
                                  }
                                }
                              }
                            }
                          }
                        }
echo '

                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Mois actuel</span>
                  </p>
                </div>
              </div>
            </div>';
?>