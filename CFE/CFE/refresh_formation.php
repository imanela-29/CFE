<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';
  
    $qu = "SELECT COLUMN_NAME, ORDINAL_POSITION FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' LIMIT 20 OFFSET 1 ";
    $res = mysqli_query($conn,$qu);
    $resChe = mysqli_num_rows($res);
    if($resChe > 0){
      while($row = mysqli_fetch_assoc($res)){
        echo '<tr class="text-center">
        <td>'.$row["ORDINAL_POSITION"].'</td>
        <td>'.$row["COLUMN_NAME"].'</td>
        <td>
          <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-success edit_dataa" href="#" name="edit" id="'.$row['ORDINAL_POSITION'].'">
            <i class="fas fa-eye"></i>
          </a>
          <a role="button" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-icon btn-sm btn-outline-danger" onclick="return checkDelete()" href="delformation.php?id='.$row["ORDINAL_POSITION"].'">
            <i class="fas fa-trash-alt"></i>
          </a>
        </td>
        </tr>';
      }
    }
?>