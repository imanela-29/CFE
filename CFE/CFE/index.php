<?php
session_start();
  
  include 'php/con_index.php';
  include 'php/conn.php';

  if(isset($_POST["submit"])){

    $em =$_POST['email'];
    $ps = $_POST['mdp'];
        
              
    $query = "SELECT * FROM users WHERE email = '$em' AND mdp = '$ps' ";

    $statement = $connect->prepare($query);
    $statement->execute();
    $count = $statement->rowCount();
    
      
    if($count > 0) {
      $_SESSION["email"] = $_POST["email"];
      header("location:dashboard.php");
    }

    else{
      $message = '<label>Vos données sont incorrectes, veuillez réessayer</label>';
    }
  }
  
  if ( isset($_POST["submit_admin"]) ) {
    $em =$_POST['email1'];
    $ps = $_POST['mdp1'];
        
              
    $query = "SELECT * FROM admin WHERE email = '$em' AND mdp = '$ps' ";

    $statement = $connect->prepare($query);
    $statement->execute();
    $count = $statement->rowCount();
    
      
    if($count > 0) {
      $_SESSION["email"] = $_POST["email1"];
      header("location:dashboard_admin.php");
    }

    else{
      $message1 = '<label>Vos données sont incorrectes, veuillez réessayer</label>';
    }
  }
       

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Centre de Formation Eva | CFE</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.html">
        <img src="assets/img/brand/whit.png" style="height: 50px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-7">


          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Accès Apprenti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Accès admin</a>
              </li>
            </ul>
          </div>
          <div class="card shadow">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                  <form role="form" method="post" class="text-center">
                    <label class="text-center text-danger">Saisissez vos données !</label>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary"><i class="ni ni-email-83" style="color: #fff"></i></span>
                        </div>
                        <input class="form-control" style="border: 1px solid #5e72e4; text-align: center;" name="email" placeholder="mail@cfe.ma" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="background-color: #5e72e4"><i class="ni ni-lock-circle-open" style="color: #fff"></i></span>
                        </div>
                        <input class="form-control" style="border: 1px solid #5e72e4; text-align: center;" name="mdp" placeholder="mot de passe" type="password">
                      </div>
                    </div>
                    <div class="text-center">
                      <input type="submit" name="submit" class="btn btn-block btn-primary my-4"  value="Se connecter">
                    </div>
                    <?php 
                      if(isset($message)){
                        echo '<label class="text-danger text-center">'.$message.'</label>';
                      }
                    ?>
                  </form>
                </div>
                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                  <form role="form" method="post" class="text-center">
                    <label class="text-center text-danger">Saisissez vos données !</label>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary"><i class="ni ni-email-83" style="color: #fff"></i></span>
                        </div>
                        <input class="form-control" style="border: 1px solid #5e72e4; text-align: center;" name="email1" placeholder="mail@cfe.ma" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="background-color: #5e72e4"><i class="ni ni-lock-circle-open" style="color: #fff"></i></span>
                        </div>
                        <input class="form-control" style="border: 1px solid #5e72e4; text-align: center;" name="mdp1" placeholder="mot de passe" type="password">
                      </div>
                    </div>
                    <div class="text-center">
                      <input type="submit" name="submit_admin" class="btn btn-block btn-primary my-4" value="Se connecter">
                    </div>
                    <?php 
                      if(isset($message1)){
                        echo '<label class="text-danger text-center">'.$message1.'</label>';
                      }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Mot de passe oublié ?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Créer un nouveau compte</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">Eva Factory</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">Qui sommes-nous ?</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">CFE License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>