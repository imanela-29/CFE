<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

$qu = "SELECT COLUMN_NAME, ORDINAL_POSITION FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' AND ORDINAL_POSITION>1";
$res = mysqli_query($conn,$qu);
$resChe = mysqli_num_rows($res);
if($resChe > 0){
  while($row = mysqli_fetch_assoc($res)){

    $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' AND ORDINAL_POSITION>1";
    $re = mysqli_query($conn, $q);
    $resCh = mysqli_num_rows($re);
    if($resCh > 0){
      while($rowww = mysqli_fetch_array($re)){
        $column[] = $rowww["COLUMN_NAME"];
      }
        $f = $row["ORDINAL_POSITION"];
        $j = $f-2;
        $quu = "SELECT * FROM absence WHERE formation = '$column[$j]' and date_absence >= DATE_FORMAT(NOW() ,'%Y-%m-01') order by id";
        $ress = mysqli_query($conn,$quu);
        $resChee = mysqli_num_rows($ress);
        if($resChee > 0){
          while($roww = mysqli_fetch_assoc($ress)){
            echo '
            <tr class="text-center">
              <th scope="col">'.$roww["id"].'</th>
              <th scope="col">'.$roww["nom"].'</th>
              <td>
                <a role="button" data-toggle="tooltip" data-placement="top" title="Consulter" class="btn btn-icon btn-sm btn-outline-default edit_data" href="#" name="edit" id="'.$roww['id'].'">
                  <i class="fas fa-eye"></i>
                </a>
              </td>  
            </tr>
            <div class="modal fade custom-modal bd-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true" id="modal_edit">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                      
                    <div class="modal-header">
                        <h4 class="modal-title">Informations supplémentaires</h4>
                        <button type="button" class="close" data-dismiss="modal" style="color : #ff6600;">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Fermer</span>
                        </button>
                    </div>
                    <div class="modal-body" id="up">

                    </div>
                  </div>
              </div>
            </div>';
          }
        }
    }
  }
}           
?>