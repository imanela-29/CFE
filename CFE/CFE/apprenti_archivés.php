<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';
       
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Apprenti Archivés | CFE</title>
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
              <a class="nav-link" href="dashboard_admin.php">
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
          
           <!--Navbar links -->
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
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">

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
                </div>
              </div>
            </div>
          </div>


         <form method="POST">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      
                      <div class=" col-xl-2">
                        <input type="text" class="form-control" name="name_recherche" placeholder="Nom et prénom">
                      </div>
                      
                      <div class=" col-xl-2">
                        <select class="form-control" name="formation_recherche" >
                          <option value="" selected>Formation</option>
                          <?php
                            $qu = "SELECT COLUMN_NAME, ORDINAL_POSITION FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' LIMIT 20 OFFSET 1 ";
                            $res = mysqli_query($conn,$qu);
                            $resChe = mysqli_num_rows($res);
                            if($resChe > 0){
                              while($row = mysqli_fetch_assoc($res)){
                                echo '
                                <option value="'.$row["ORDINAL_POSITION"].'">'.$row["COLUMN_NAME"].'</option>';
                              }
                            }
                          ?>

                        </select>    
                      </div>

                      <div class=" col-xl-2">
                        <select class="form-control" name="situation_recherche">
                          <option value="" selected>Situation</option>
                          <option value="Réglé">Réglé</option>
                          <option value="Non réglé">Non réglé</option>
                          <option value="Par tranche">Par tranche</option>
                          <option value="Autres">Autres</option>
                        </select>
                      </div>                      
                      
                      <div class=" col-xl-2">
                        <input type="date" class="form-control" name="date_recherche" placeholder="Date d'inscription">
                      </div>

                      <div class=" col-xl-4">
                        <input class="btn btn-block btn-success" type="submit" name="submit_recherche" value="Rechercher">
                      </div>

                    </div>
                    <div class="row">
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </form>
          
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
                  <h3 class="mb-0">Liste des apprentis archivés</h3>
                </div>
              </div>
             
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table id="tb" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nom et prénom</th>
                    <th scope="col">Situation</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Plus d'infos</th>
                  </tr>
                </thead>
                <tbody id="refresh_a">
                  <?php

                    if( isset($_POST["submit_recherche"]) ){

                      if( $_POST["name_recherche"] != '' && $_POST["situation_recherche"] == ''  && $_POST["formation_recherche"] == '' && $_POST["date_recherche"] == ''){
                        $name = $_POST["name_recherche"];

                        $qu = "SELECT * FROM users WHERE nom like '%$name%' and date_inscription = 0000-00-00 ORDER BY id DESC";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '
                            <tr class="text-center">';

                            if( $row["nom"] == '' || $row["email"] == '' || $row["mdp"] == '' || $row["img"] == '' || $row["cin"] == '' || $row["tel"] == '' || $row["adresse"] == '' || $row["fonction"] == '' || $row["situation"] == '' || $row["prix_formation"] == '' || $row["groupe"] == '' ){
                              echo '<th scope="row"><span class="badge badge-warning">'.$row["id"].'</span></th>';
                            }
                            else{
                              echo '<th scope="row"><span class="badge badge-success">'.$row["id"].'</span></th>';
                            }

                          
                             echo' <td>'.$row["nom"].'</td>';


                              if ( $row["situation"] == 'Non réglé' ){
                                echo '<td class="text-warning">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Réglé' ){
                                echo '<td class="text-success">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Par tranche' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Autre' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              
                              echo '
                              <td>'.$row["prix_formation"].'</td>';

                              if ( $row["comment"] == "" ){
                                echo '<td class="text-default">Aucun commentaire</td>';
                              }
                              else {
                                echo '<td class="text-warning">'.$row["comment"].'</td>';
                              }
                                                    
                              echo '
                                                    
                              <td>
                                <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-success edit_dataa" href="#" name="edit" id="'.$row['id'].'">
                                  <i class="fas fa-eye"></i>
                                </a>';
                                $date1 = $row["date_inscription"];
                                $date2 = $row["date_reinscription"];

                                $date = date("Y-m-d");

                                $diff1 = abs(strtotime($date1) - strtotime($date));
                                $diff2 = abs(strtotime($date2) - strtotime($date));
                                            
                                  if ( $diff1 > 2592000 && $diff2 > 2592000 ){
                                   echo '
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Reinscrire" class="btn btn-icon btn-sm btn-outline-warning re" onclick="" href="reinscrire.php?id='.$row["id"].'">
                                        <i class="fas fa-user-plus"></i>
                                      </a>
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default re" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="far fa-address-card"></i>
                                      </a>';
                                }
                                echo '
                              </td>
                            </tr>
                            ';
                          }
                        }

                      }

                      elseif( $_POST["name_recherche"] == '' && $_POST["situation_recherche"] != ''  && $_POST["formation_recherche"] == '' && $_POST["date_recherche"] == '' ){
                        $situation = $_POST["situation_recherche"];

                        $qu = "SELECT * FROM users WHERE situation = '$situation' and date_inscription = 0000-00-00 ORDER BY id DESC";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '
                            <tr class="text-center">';

                            if( $row["nom"] == '' || $row["email"] == '' || $row["mdp"] == '' || $row["img"] == '' || $row["cin"] == '' || $row["tel"] == '' || $row["adresse"] == '' || $row["fonction"] == '' || $row["situation"] == '' || $row["prix_formation"] == '' || $row["groupe"] == '' ){
                              echo '<th scope="row"><span class="badge badge-warning">'.$row["id"].'</span></th>';
                            }
                            else{
                              echo '<th scope="row"><span class="badge badge-success">'.$row["id"].'</span></th>';
                            }

                          
                             echo' <td>'.$row["nom"].'</td>';


                              if ( $row["situation"] == 'Non réglé' ){
                                echo '<td class="text-warning">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Réglé' ){
                                echo '<td class="text-success">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Par tranche' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Autre' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              
                              echo '
                              <td>'.$row["prix_formation"].'</td>';

                              if ( $row["comment"] == "" ){
                                echo '<td class="text-default">Aucun commentaire</td>';
                              }
                              else {
                                echo '<td class="text-warning">'.$row["comment"].'</td>';
                              }
                                                    
                              echo '
                                                    
                              <td>
                                <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-success edit_dataa" href="#" name="edit" id="'.$row['id'].'">
                                  <i class="fas fa-eye"></i>
                                </a>';
                                $date1 = $row["date_inscription"];
                                $date2 = $row["date_reinscription"];

                                $date = date("Y-m-d");

                                $diff1 = abs(strtotime($date1) - strtotime($date));
                                $diff2 = abs(strtotime($date2) - strtotime($date));
                                            
                                  if ( $diff1 > 2592000 && $diff2 > 2592000 ){
                                    echo '
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Reinscrire" class="btn btn-icon btn-sm btn-outline-warning re" onclick="" href="reinscrire.php?id='.$row["id"].'">
                                        <i class="fas fa-user-plus"></i>
                                      </a>
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default re" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="far fa-address-card"></i>
                                      </a>';
                                }
                                echo '
                              </td>
                            </tr>
                            ';
                          }
                        }

                      }

                      elseif( $_POST["name_recherche"] == '' && $_POST["situation_recherche"] == ''  && $_POST["formation_recherche"] != '' && $_POST["date_recherche"] == '' ){
                        $pos = $_POST["formation_recherche"];

                        $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' AND ORDINAL_POSITION>1";
                        $re = mysqli_query($conn, $q);
                        $resCh = mysqli_num_rows($re);
                        if($resCh > 0){
                          while($roww = mysqli_fetch_array($re)){
                            $column[] = $roww["COLUMN_NAME"];
                            $i = $pos-2;
                          }

                        $qu = "SELECT * FROM users inner join formation on users.id_formation = formation.id_formation and date_inscription = 0000-00-00 and `$column[$i]` = 'on' ORDER BY id DESC";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '
                            <tr class="text-center">';

                            if( $row["nom"] == '' || $row["email"] == '' || $row["mdp"] == '' || $row["img"] == '' || $row["cin"] == '' || $row["tel"] == '' || $row["adresse"] == '' || $row["fonction"] == '' || $row["situation"] == '' || $row["prix_formation"] == '' || $row["groupe"] == '' ){
                              echo '<th scope="row"><span class="badge badge-warning">'.$row["id"].'</span></th>';
                            }
                            else{
                              echo '<th scope="row"><span class="badge badge-success">'.$row["id"].'</span></th>';
                            }

                          
                             echo' <td>'.$row["nom"].'</td>';


                              if ( $row["situation"] == 'Non réglé' ){
                                echo '<td class="text-warning">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Réglé' ){
                                echo '<td class="text-success">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Par tranche' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Autre' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              
                              echo '
                              <td>'.$row["prix_formation"].'</td>';

                              if ( $row["comment"] == "" ){
                                echo '<td class="text-default">Aucun commentaire</td>';
                              }
                              else {
                                echo '<td class="text-warning">'.$row["comment"].'</td>';
                              }
                                                    
                              echo '<td>
                                <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-success edit_dataa" href="#" name="edit" id="'.$row['id'].'">
                                  <i class="fas fa-eye"></i>
                                </a>';
                                $date1 = $row["date_inscription"];
                                $date2 = $row["date_reinscription"];

                                $date = date("Y-m-d");

                                $diff1 = abs(strtotime($date1) - strtotime($date));
                                $diff2 = abs(strtotime($date2) - strtotime($date));
                                            
                                  if ( $diff1 > 2592000 && $diff2 > 2592000 ){
                                    echo '
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Reinscrire" class="btn btn-icon btn-sm btn-outline-warning re" onclick="" href="reinscrire.php?id='.$row["id"].'">
                                        <i class="fas fa-user-plus"></i>
                                      </a>
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default re" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="far fa-address-card"></i>
                                      </a>';
                                }
                                echo '
                              </td>
                            </tr>
                            ';
                          }
                        }
                        }
                      }
                        
                      elseif( $_POST["name_recherche"] == '' && $_POST["situation_recherche"] == ''  && $_POST["formation_recherche"] == '' && $_POST["date_recherche"] != '' ){
                        $date = $_POST["date_recherche"];

                        $qu = "SELECT * FROM users WHERE date_inscription BETWEEN '$date' AND 'NOW()' ORDER BY id DESC";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '
                            <tr class="text-center">';

                            if( $row["nom"] == '' || $row["email"] == '' || $row["mdp"] == '' || $row["img"] == '' || $row["cin"] == '' || $row["tel"] == '' || $row["adresse"] == '' || $row["fonction"] == '' || $row["situation"] == '' || $row["prix_formation"] == '' || $row["groupe"] == '' ){
                              echo '<th scope="row"><span class="badge badge-warning">'.$row["id"].'</span></th>';
                            }
                            else{
                              echo '<th scope="row"><span class="badge badge-success">'.$row["id"].'</span></th>';
                            }

                          
                             echo' <td>'.$row["nom"].'</td>';


                              if ( $row["situation"] == 'Non réglé' ){
                                echo '<td class="text-warning">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Réglé' ){
                                echo '<td class="text-success">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Par tranche' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Autre' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              
                              echo '
                              <td>'.$row["prix_formation"].'</td>';

                              if ( $row["comment"] == "" ){
                                echo '<td class="text-default">Aucun commentaire</td>';
                              }
                              else {
                                echo '<td class="text-warning">'.$row["comment"].'</td>';
                              }
                                                    
                              echo '
                                                    
                              <td>
                                <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-success edit_dataa" href="#" name="edit" id="'.$row['id'].'">
                                  <i class="fas fa-eye"></i>
                                </a>';
                                $date1 = $row["date_inscription"];
                                $date2 = $row["date_reinscription"];

                                $date = date("Y-m-d");

                                $diff1 = abs(strtotime($date1) - strtotime($date));
                                $diff2 = abs(strtotime($date2) - strtotime($date));
                                            
                                  if ( $diff1 > 2592000 && $diff2 > 2592000 ){
                                    echo '
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Reinscrire" class="btn btn-icon btn-sm btn-outline-warning re" onclick="" href="reinscrire.php?id='.$row["id"].'">
                                        <i class="fas fa-user-plus"></i>
                                      </a>
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default re" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="far fa-address-card"></i>
                                      </a>';
                                }
                                echo '
                              </td>
                            </tr>
                            ';
                          }
                        }

                      }


                    }



                      else{

                        $qu = "SELECT * FROM users WHERE date_inscription = 0000-00-00 ORDER BY id DESC";
                        $res = mysqli_query($conn,$qu);
                        $resChe = mysqli_num_rows($res);
                        if($resChe > 0){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '
                            <tr class="text-center">';

                            if( $row["nom"] == '' || $row["email"] == '' || $row["mdp"] == '' || $row["img"] == '' || $row["cin"] == '' || $row["tel"] == '' || $row["adresse"] == '' || $row["fonction"] == '' || $row["situation"] == '' || $row["prix_formation"] == '' || $row["groupe"] == '' ){
                              echo '<th scope="row"><span class="badge badge-warning">'.$row["id"].'</span></th>';
                            }
                            else{
                              echo '<th scope="row"><span class="badge badge-success">'.$row["id"].'</span></th>';
                            }

                          
                             echo' <td>'.$row["nom"].'</td>';


                              if ( $row["situation"] == 'Non réglé' ){
                                echo '<td class="text-warning">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Réglé' ){
                                echo '<td class="text-success">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Par tranche' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              elseif ( $row["situation"] == 'Autre' ){
                                echo '<td class="text-info">'.$row["situation"].'</td>';
                              }
                              
                              echo '
                              <td>'.$row["prix_formation"].'</td>
                              ';

                              if ( $row["comment"] == "" ){
                                echo '<td class="text-default">Aucun commentaire</td>';
                              }
                              else {
                                echo '<td class="text-warning">'.$row["comment"].'</td>';
                              }
                                                    
                              echo '
                                                    
                              <td>
                                <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-success edit_dataa" href="#" name="edit" id="'.$row['id'].'">
                                  <i class="fas fa-eye"></i>
                                </a>';
                                $date1 = $row["date_inscription"];
                                $date2 = $row["date_reinscription"];

                                $date = date("Y-m-d");

                                $diff1 = abs(strtotime($date1) - strtotime($date));
                                $diff2 = abs(strtotime($date2) - strtotime($date));
                                            
                                  if ( $diff1 > 2592000 && $diff2 > 2592000 ){
                                    echo '
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Reinscrire" class="btn btn-icon btn-sm btn-outline-warning re" onclick="" href="reinscrire.php?id='.$row["id"].'">
                                        <i class="fas fa-user-plus"></i>
                                      </a>
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default re" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="far fa-address-card"></i>
                                      </a>';
                                }
                                echo '
                              </td>
                            </tr>
                            ';
                          }
                        }

                      }
                  ?>

                  <div class="modal fade custom-modal bd-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="modal_edita" aria-hidden="true" id="modal_editad">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            
                          <div class='modal-header'>
                              <h4 class="modal-title">Plus d'informations</h4>
                              <button type='button' class='close' data-dismiss='modal' style="color : #ff6600;">
                                         <span aria-hidden='true'>&times;</span>
                                          <span class='sr-only'>Fermer</span>
                              </button>
                          </div>
                          <div class='modal-body' id="udp">

                          </div>
                        </div>
                    </div>
                  </div>
                  
                </tbody>
              </table>
            </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/select2/dist/js/select2.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/quill/dist/quill.min.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>


  <script type="text/javascript">
    function checkDelete(){
      return confirm("Êtes-vous sûr(e) de vouloir supprimer ?")
    }
  </script>
</body>

</html>

 


<script>

  $(document).ready(
    function(){
      setInterval(function(){
        $(".refresh_prix").load("refresh_prix.php");
      },500);
    });

  $(document).ready(
    function(){
      setInterval(function(){
        $("#refresh").load("refresh_apprenti.php");
      },500);
    });

  $(document).ready(
    function(){
      setInterval(function(){
        $("#refresh_a").load("refresh_apprenti_arch.php");
      },20000);
    });

  $(document).ready(
    function(){
      setInterval(function(){
        $("#ref_card_apprenti").load("ref_card_apprenti.php");
      },500);
    });


  $(document).ready(function(){

   $(document).on('click', '.edit_dataa', function(){
    var etu = $(this).attr("id");
    $.ajax({
     url:"show_apprenti.php",
     method:"POST",
     data:{etu:etu},
     success:function(data){
      $('#udp').html(data);
      $('#modal_editad').modal('show');
     }
    });
   });
  });

  $(document).ready(function(){

   $(document).on('click', '.prix', function(){
    var etu = $(this).attr("id_form");
    $.ajax({
     url:"show_prix.php",
     method:"POST",
     data:{etu:etu},
     success:function(data){
      $('#pei').html(data);
     }
    });
   });
  });

</script>