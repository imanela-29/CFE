<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

 $qu = "SELECT * FROM emploi";
  $res = mysqli_query($conn,$qu);
  $resChe = mysqli_num_rows($res);
  if($resChe > 0){
    while($row = mysqli_fetch_assoc($res)){
      echo '
      <tr class="text-center">
        <th scope="row">'.$row["jour"].'</th>
        <td>'.$row["s1"].'</td>
        <td>'.$row["s2"].'</td>
        <td>'.$row["s3"].'</td>
        <td>'.$row["s4"].'</td>
        <td>'.$row["s5"].'</td>
        <td>'.$row["s6"].'</td>
        <td>
          <a role="button" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-icon btn-sm btn-outline-default edit_dataa" href="modifier_emploi1.php?id='.$row['id'].'" name="edit">
            <i class="fa fa-edit"></i>
          </a>
        </td>
      </tr>
      ';
    }
  }
?>