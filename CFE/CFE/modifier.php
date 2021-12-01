<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';
  $dd = $_GET["id"];
  
  

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>
    <?php
      $qu = "SELECT * FROM users WHERE id = $dd";
      $res = mysqli_query($conn,$qu);
      $resChe = mysqli_num_rows($res);
      if($resChe > 0){
        while($row = mysqli_fetch_assoc($res)){
          echo 
            'Profil : ' . $row["nom"].' | CFE'
          ;
        }
      }
    ?>
  </title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/bluee.png" class="navbar-brand-img" alt="..." >
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="dashboard_admin.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Accueil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="caisse.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Caisse</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="acc_apprenti.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Apprenti</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formateur.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Formateur</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="emploi.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Emploi du temps</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formation.php">
                <i class="fab fa-leanpub text-success"></i>
                <span class="nav-link-text">Formation</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <?php

                      $qu = "SELECT * FROM admin WHERE email = '$mail'";
                      $res = mysqli_query($conn,$qu);
                      $resChe = mysqli_num_rows($res);
                      if($resChe > 0){
                        while($row = mysqli_fetch_assoc($res)){
                          echo '<span class="mb-0 text-sm font-weight-bold">'.$row["nom"].' '.$row["prenom"].'</span>';
                        }
                      }

                    ?>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <!-- links -->
          </div>
          <!-- Card stats -->
          <div class="row" id="ref_card_apprenti">
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total apprenti</h5>

                      <?php
                        $qu = "SELECT COUNT(id) as idd FROM users ";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '<span class="h2 font-weight-bold mb-0">'.$row["idd"].' apprentis</span>';
                          }
                        }
                      ?>

                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Nbr non réglé</h5>

                      <?php
                        $qu = "SELECT COUNT(id) as idd FROM users WHERE situation = 'Non réglé' AND date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '<span class="h2 font-weight-bold mb-0">'.$row["idd"].' apprentis</span>';
                          }
                        }
                      ?>

                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total non réglé</h5>

                      <?php
                        $qu = "SELECT SUM(prix_formation) as prix FROM users WHERE situation = 'Non réglé' AND date_inscription >= DATE_FORMAT(NOW() ,'%Y-%m-01')";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '<span class="h2 font-weight-bold mb-0">'.$row["prix"].' DHS</span>';
                          }
                        }
                      ?>

                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">


                  <?php
                    $qu = "SELECT * FROM users WHERE id = '$dd'";
                    $res = mysqli_query($conn,$qu);
                    $resChe = mysqli_num_rows($res);
                    if($resChe > 0){
                      while($row = mysqli_fetch_assoc($res)){
                        echo '
                          <label>Modifer le profil : <span class="h3">'.$row["nom"].'</span><label>
                        ';
                      }
                    }
                  ?>

                </div>
              </div>
            </div>
            <form method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <?php
                      $qu = " SELECT * FROM users WHERE id = '$dd' ";
                      $res = mysqli_query($conn,$qu);
                      $resChe = mysqli_num_rows($res);
                      if($resChe > 0){
                        while($row = mysqli_fetch_assoc($res)){
                          echo '
                            <h6 class="heading-small text-muted mb--3">Informations personnelles</h6>
                            <hr class="my-4" />
                            <div class="row">
                              <div class="form-group col-lg-3">
                                <label for="exampleFormControlInput1">Nom de famille</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="'.$row["nom"].'" name="nom">
                              </div>
                              <div class="form-group col-lg-3">
                                <label for="exampleFormControlInput3">Email</label>
                                <input type="text" class="form-control" id="exampleFormControlInput3" value="'.$row["email"].'" name="email">
                              </div>
                              <div class="form-group col-lg-3">
                                <label for="exampleFormControlInput4">Mot de passe</label>
                                <input type="password" class="form-control" id="exampleFormControlInput4" value="'.$row["mdp"].'" name="mdp">
                              </div>
                              <div class="form-group col-lg-3">
                                <label for="exampleFormControlInput7">Numéro de tel</label>
                                <input type="tel" maxlength="10" class="form-control" id="exampleFormControlInput7" value="'.$row["tel"].'" name="tel">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-lg-3">
                                <label for="exampleFormControlInput50">CIN / CNE</label>
                                <input type="text" class="form-control" id="exampleFormControlInput50" value="'.$row["cin"].'" name="cin">
                              </div>
                              <div class="form-group col-lg-3">
                                <label for="exampleFormControlInput60">Adresse</label>
                                <input type="text" class="form-control" id="exampleFormControlInput60" value="'.$row["adresse"].'" name="adresse">
                              </div>
                              <div class="form-group col-lg-3">
                                <label for="exampleFormControlInput5">Fonction</label>
                                <input type="text" class="form-control" id="exampleFormControlInput5" value="'.$row["fonction"].'" name="fonction">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label for="exampleFormControlInput11">Prix</label>
                                <input type="number" class="form-control" id="exampleFormControlInput11" name="prix" value="'.$row["prix_formation"].'">
                              </div>
                              <div class="form-group col-lg-6">
                                <label for="exampleFormControlInput10">Commentaire</label>
                                <input type="text" class="form-control" id="exampleFormControlInput10" name="comment" value="'.$row["comment"].'">
                              </div>                              
                            </div>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label for="exampleFormControlInput88">Groupe</label>
                                <input type="text" class="form-control" id="exampleFormControlInput88" value="'.$row["groupe"].'" name="groupe">
                              </div>
                              <div class="form-group col-lg-6">
                                <label for="exampleFormControlInput6">Situation</label>
                                <select class="form-control" id="exampleFormControlInput6" name="situation">
                                  <option value="Réglé" ' . (($row["situation"] == "Réglé" ) ? "selected"  : '') . '>Réglé</option>
                                  <option value="Non réglé" ' . (($row["situation"] == "Non réglé" ) ? "selected"  : '') . '>Non réglé</option>
                                  <option value="Par tranche" ' . (($row["situation"] == "Par tranche" ) ? "selected"  : '') . '>Par tranche</option>
                                  <option value="Autre" ' . (($row["situation"] == "Autre" ) ? "selected"  : '') . '>Autre</option>  
                                </select>
                              </div>
                            </div>

                            <h6 class="heading-small text-muted mb--3 mt-2">Choix de formations</h6>
                            <hr class="my-4" />
                            <div class="row">
                              <div class="form-group col-lg-12">
                                <label for="exampleFormControlInput10100">Inscrit à</label>
                                <input type="text" class="form-control" id="exampleFormControlInput10100" readonly name="formation" value="';
                                $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2'";
                                $res = mysqli_query($conn, $q);
                                $resChe = mysqli_num_rows($res);
                                if($resChe > 0){
                                  while($roww = mysqli_fetch_array($res)){
                                    $c = $roww["COLUMN_NAME"];

                                    $qu = "SELECT * FROM users inner join formation WHERE users.id_formation = formation.id_formation and users.id = '$dd'";
                                    $ress = mysqli_query($conn, $qu);
                                    $resCh = mysqli_num_rows($ress);
                                    if($resCh > 0){
                                      while($rows = mysqli_fetch_array($ress)){
                                        $a = $rows["$c"];
                                        if($a == "on"){
                                          echo $c.", ";
                                        }
                                      }
                                    }
                                  }
                                }
                                echo 
                                '">
                              </div>
                            </div>
                            <div class="row">';
                              $qu = "SELECT COLUMN_NAME, ORDINAL_POSITION FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' LIMIT 20 OFFSET 1 ";
                                $res = mysqli_query($conn,$qu);
                                $resChe = mysqli_num_rows($res);
                                if($resChe > 0){
                                  while($row = mysqli_fetch_assoc($res)){
                                    echo '
                                      <div class="col-md-3">
                                        <div class="custom-control custom-checkbox">
                                          <input type="hidden" name="check[]" value="off">
                                          <input type="checkbox" class="custom-control-input" id="customCheck'.$row["ORDINAL_POSITION"].'" name="check[]" ((checked="checked") ? "on" : "off")>
                                          <label class="custom-control-label" for="customCheck'.$row["ORDINAL_POSITION"].'">'.$row["COLUMN_NAME"].'</label>
                                        </div>
                                      </div>
                                    ';
                                  }
                                }
                                echo '
                            </div>
                            
                            <div class="row mt-4">
                              <div class="form-group col-lg-12">
                                <input class="btn btn-block btn-success" type="submit" name="enregistrer" value="Enregistrer">
                              </div>
                            </div>
                          ';
                          
                        }
                      }
                    ?>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">Eva Factory</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Qui sommes-nous ?</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">CFE License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  <script type="text/javascript">
    function checkDelete(){
      return confirm("Êtes-vous sûr(e) de vouloir supprimer ?")
    }
  </script>
</body>

</html>

<script type="text/javascript">
  $(document).ready(
    function(){
      setInterval(function(){
        $("#ref_card_apprenti").load("ref_card_apprenti.php");
      },500);
    });
</script>

<?php

  if( isset($_POST["enregistrer"]) ){

    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $cin = $_POST["cin"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $fonction = $_POST["fonction"];
    $situation = $_POST["situation"];
    $prix = $_POST["prix"];
    $comment = $_POST["comment"];
    $groupe = $_POST["groupe"];

    $a = "UPDATE users SET nom = '$nom', email = '$email', mdp = '$mdp', cin = '$cin', adresse = '$adresse', tel = '$tel', fonction = '$fonction', situation = '$situation', prix_formation = '$prix', comment = '$comment', groupe = '$groupe' WHERE id = '$dd' ";
    $conn->query($a);



    $qu = "SELECT count(ORDINAL_POSITION) as total FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2'";
    $ress = mysqli_query($conn, $qu);
    $resChse = mysqli_num_rows($ress);
    if($resChse > 0){
      while($row = mysqli_fetch_array($ress)){
        $total = $row["total"]-1;

        $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' AND ORDINAL_POSITION>1";
        $res = mysqli_query($conn, $q);
        $resChe = mysqli_num_rows($res);
        if($resChe > 0){
          while($roww = mysqli_fetch_array($res)){
            $column[] = $roww["COLUMN_NAME"];

            
          }
            $check = $_POST["check"];
            $t = [];
            foreach($check as $value) {
              if($value === 'on') {
                  array_pop($t);
              }
              $t[] = $value;
            }
            $f = $t;
            $v = implode("', '", $f);
            $c = "'".$v."'";
  
            for($i=0;$i<$total;$i++){
              $q1 = "UPDATE formation set $column[$i] = '$f[$i]' WHERE id_formation = '$dd'";
              $conn->query($q1);
            }
        }
      }

  }

  /*if( isset($_POST["enregistrer_f"]) ){


    $qu = "SELECT count(ORDINAL_POSITION) as total FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2'";
    $ress = mysqli_query($conn, $qu);
    $resChse = mysqli_num_rows($ress);
    if($resChse > 0){
      while($row = mysqli_fetch_array($ress)){
        $total = $row["total"]-1;

        $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' AND ORDINAL_POSITION>1";
        $res = mysqli_query($conn, $q);
        $resChe = mysqli_num_rows($res);
        if($resChe > 0){
          while($roww = mysqli_fetch_array($res)){
            $column[] = $roww["COLUMN_NAME"];

            
          }
            $check = $_POST["check"];
            $t = [];
            foreach($check as $value) {
              if($value === 'on') {
                  array_pop($t);
              }
              $t[] = $value;
            }
            $f = $t;
            $v = implode("', '", $f);
            $c = "'".$v."'";
  
            for($i=0;$i<$total;$i++){
              $q1 = "UPDATE formation set $column[$i] = '$f[$i]' WHERE id_formation = '$dd'";
              $conn->query($q1);
            }
        }
      }
  }*/
?>
    <script type="text/javascript">
      window.location = "apprenti.php";
    </script>
    <?php   
  }  
?>
    
    
  

