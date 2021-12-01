<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';
  


                    if( isset($_POST["submit_recherche"]) ){

                      if( $_POST["name_recherche"] != '' && $_POST["situation_recherche"] == ''  && $_POST["formation_recherche"] == '' && $_POST["date_recherche"] == ''){
                        $name = $_POST["name_recherche"];

                        $qu = "SELECT * FROM users WHERE nom like '%$name%' and date_inscription <> 0000-00-00 ORDER BY id DESC";
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
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="fas fa-archive"></i>
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

                        $qu = "SELECT * FROM users WHERE situation = '$situation' and date_inscription <> 0000-00-00 ORDER BY id DESC";
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
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="fas fa-archive"></i>
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
                        $formation = $_POST["formation_recherche"];

                        $qu = "SELECT * FROM users inner join formation on users.id_formation = formation.id_formation and users.id_formation = '$formation' and date_inscription <> 0000-00-00 ORDER BY id DESC";
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
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="fas fa-archive"></i>
                                      </a>';
                                }
                                echo '
                              </td>
                            </tr>
                            ';
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
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="fas fa-archive"></i>
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

                        $qu = "SELECT * FROM users WHERE date_inscription <> 0000-00-00 ORDER BY id DESC";
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
                                      <a role="button" data-toggle="tooltip" data-placement="top" title="Archiver" class="btn btn-icon btn-sm btn-outline-default" onclick="" href="archiver.php?id='.$row["id"].'">
                                        <i class="fas fa-archive"></i>
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