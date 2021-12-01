<?php
session_start();
    $mail = $_SESSION["email"];
  include 'php/conn.php';

if(isset($_POST["etu"]))
{
  $output1='';
  $output2='';
  $output3='';
  $output4='';

  $query = "SELECT * FROM users inner join formation WHERE id = ".$_POST["etu"]." and users.id_formation = formation.id_formation";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_array($result)){
    $output1 .= 
            '
     
          <div class="row">
            <div class="col-4 text-center">
              <img src="photo_apprenti/'.$row["img"].'" alt="Photo de profil" class="img-fluid" style="width: 150px;">
            </div>
            <div class="col-8">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput1">Nom et Prénom</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="'.$row["nom"].'" readonly name="nom">
                </div>
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput50">CIN / CNE</label>
                  <input type="text" class="form-control" id="exampleFormControlInput50" value="'.$row["cin"].'" readonly name="cin">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput3">Email</label>
                  <input type="text" class="form-control" id="exampleFormControlInput3" value="'.$row["email"].'" readonly name="email">
                </div>
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput4">Mot de passe</label>
                  <input type="text" class="form-control" id="exampleFormControlInput4" value="'.$row["mdp"].'" readonly name="mdp">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="form-group col-lg-4">
                  <label for="exampleFormControlInput5">Fonction</label>
                  <input type="text" class="form-control" id="exampleFormControlInput5" value="'.$row["fonction"].'" readonly name="fonction">
              </div>
              <div class="form-group col-lg-4">
                <label for="exampleFormControlInput60">Adresse</label>
                <input type="text" class="form-control" id="exampleFormControlInput60" value="'.$row["adresse"].'" readonly name="adresse">
              </div>  
              <div class="form-group col-lg-4">
                <label for="exampleFormControlInput7">Numéro de tel</label>
                <input type="tel" maxlength="10" class="form-control" id="exampleFormControlInput7" value="'.$row["tel"].'" readonly name="tel">
              </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-4">
                  <label for="exampleFormControlInput6">Situation</label>
                  <input type="text" class="form-control" id="exampleFormControlInput6" value="'.$row["situation"].'" readonly name="situation">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleFormControlInput11">Prix</label>
                  <input type="text" class="form-control" id="exampleFormControlInput11" value="'.$row["prix_formation"].'" readonly name="prix">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleFormControlInput102">Groupe</label>
                  <input type="text" class="form-control" id="exampleFormControlInput102" readonly name="groupe" value="'.$row["groupe"].'">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-12">
                  <label for="exampleFormControlInput10">Commentaire</label>
                  <input type="text" class="form-control" id="exampleFormControlInput10" readonly name="comment" value="'.$row["comment"].'">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xl-12">
                  <label for="exampleFormControlInput100">Formation</label>
                  <input type="text" class="form-control" id="exampleFormControlInput100" readonly name="comment" value="';
                  $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2'";
                  $res = mysqli_query($conn, $q);
                  $resChe = mysqli_num_rows($res);
                  if($resChe > 0){
                    while($roww = mysqli_fetch_array($res)){
                      $c = $roww["COLUMN_NAME"];

                      $qu = "SELECT * FROM users inner join formation WHERE users.id_formation = formation.id_formation and users.id = ".$_POST["etu"]." ";
                      $ress = mysqli_query($conn, $qu);
                      $resCh = mysqli_num_rows($ress);
                      if($resCh > 0){
                        while($rows = mysqli_fetch_array($ress)){
                          $a = $rows["$c"];
                          if($a == "on"){ 
                            $output4 .= $c.", ";
                          }
                        }
                      }
                    }
                  }
                  $output2 .= '">';
                          
                  $output3 .= '
                </div>
              </div>
          </div>

          <div class="row">
            <div class="form-group col-xl-4">
              <a role="button" data-toggle="tooltip" data-placement="top" title="Télécharger" class="btn btn-sm btn-block btn-outline-success" href="fiche.php?id='.$row['id'].'">
                <i class="fas fa-download"></i>  Télécharger
              </a>
            </div>
            
            <div class="form-group col-xl-4">
              <a role="button" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-sm btn-block btn-outline-default" href="modifier.php?id='.$row['id'].'">
                <i class="fas fa-edit"></i>  Modifier
              </a>
            </div>
            <div class="form-group col-xl-3">
              <a role="button" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-sm btn-block btn-outline-danger" onclick="return checkDelete()" href="deluser.php?id='.$row["id"].'">
                <i class="fas fa-trash-alt"></i>  Supprimer
              </a>
            </div>
            <div class="form-group col-xl-1">
              <a role="button" data-toggle="tooltip" data-placement="top" title="Ajouter Photo" class="btn btn-sm btn-block btn-outline-info" href="ajout_photo.php?id='.$row['id'].'">
                <i class="far fa-image"></i>
              </a>
            </div>

          </div>';

  }
  ?>


<?php
  echo $output1.$output4.$output2.$output3;
}
?>
