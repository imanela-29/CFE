<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';
       
 
  $qu = "SELECT * FROM formateur ORDER BY id DESC LIMIT 50";
  $res = mysqli_query($conn,$qu);
  $resChe = mysqli_num_rows($res);
  if($resChe > 0){
    while($row = mysqli_fetch_assoc($res)){
      echo '
      <tr class="text-center">';

      if( $row["nom"] == '' || $row["email"] == '' || $row["mdp"] == '' || $row["img"] == '' || $row["cin"] == '' || $row["tel"] == '' || $row["adresse"] == '' || $row["situation"] == '' ){
        echo '<th scope="row"><span class="badge badge-info">'.$row["id"].'</span></th>';
      }
      else{
        echo '<th scope="row"><span class="badge badge-success">'.$row["id"].'</span></th>';
      }

       echo' <td>'.$row["nom"].'</td>
             <td>'.$row["formation"].'</td>
             <td>'.$row["date_inscription"].'</td>
       ';

        if ( $row["situation"] == 'Non réglé' ){
          echo '<td class="text-warning">'.$row["situation"].'</td>';
        }
        elseif ( $row["situation"] == 'Réglé' ){
          echo '<td class="text-success">'.$row["situation"].'</td>';
        }

        echo'
        <td>
          <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-success edit_dataa" href="#" name="edit" id="'.$row['id'].'">
            <i class="fas fa-eye"></i>
          </a>
        </td>
      </tr>
      ';
    }
  }
?>