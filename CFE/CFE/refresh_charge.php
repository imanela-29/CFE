<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';
  
  
  $qu = "SELECT * FROM charge where date_charge >= DATE_FORMAT(NOW() ,'%Y-%m-01') ORDER BY id DESC LIMIT 10";
  $res = mysqli_query($conn,$qu);
  $resChe = mysqli_num_rows($res);
  if($resChe > 0){
    while($row = mysqli_fetch_assoc($res)){
      echo '
      <tr class="text-center">
        <th scope="row">'.$row["id"].'</th>
        <td>'.$row["charge"].'</td>
        <td>'.$row["date_charge"].'</td>
        <td>'.$row["prix"].'</td>';

        if ( $row["situation"] == 'Non réglé' ){
          echo '
            <td class="text-warning">'.$row["situation"].'</td>
            <td>
              <a role="button" data-toggle="tooltip" data-placement="top" class="btn btn-icon btn-sm btn-outline-success" href="valcharge.php?id='.$row["id"].'">
                <i class="fas fa-check"></i>
              </a>
              <a role="button" data-toggle="tooltip" data-placement="top" class="btn btn-icon btn-sm btn-outline-danger" onclick="return checkDelete()" href="delcharge.php?id='.$row["id"].'">
                <i class="fas fa-trash-alt"></i>
              </a>
            </td>
          ';
        }
        elseif ( $row["situation"] == 'Réglé' ){
          echo '
          <td class="text-success">'.$row["situation"].'</td>
          <td>
            <a role="button" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-icon btn-sm btn-outline-danger" onclick="return checkDelete()" href="delcharge.php?id='.$row["id"].'">
              <i class="fas fa-trash-alt"></i>
            </a>
          </td>
          ';
        }
        elseif ( $row["situation"] == '' ){
          echo '
          <td class="text-success">Aucune opération</td>
          <td>
            <a role="button" data-toggle="tooltip" data-placement="top" class="btn btn-icon btn-sm btn-outline-success" href="valcharge.php?id='.$row["id"].'">
              <i class="fas fa-check"></i>
            </a>
            <a role="button" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-icon btn-sm btn-outline-danger" onclick="return checkDelete()" href="delcharge.php?id='.$row["id"].'">
              <i class="fas fa-trash-alt"></i>
            </a>
          </td>
          ';
        }
        echo'</tr>';
    }
  }
                  
                  
?>