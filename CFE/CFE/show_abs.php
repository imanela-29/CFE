<?php
session_start();
    $mail = $_SESSION["email"];
 	include 'php/conn.php';

if(isset($_POST["etu"]))
{
	$output='';
  $output1='';
  $output2='';

	$query = "SELECT * FROM absence WHERE id = ".$_POST["etu"]."";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
		$output .= 
            '


            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr class="text-center">
                    <th scope="col">Nom et prénom</th>
                    <th scope="col">Motif d\'absence</th>
                    <th scope="col">Date d\'absence</th>
                    <th scope="col">Numéro de tel</th>
                  </tr>
                </thead>
                <tbody>

                        <tr class="text-center">
                          <th scope="row">'.$row["nom"].'</th>
                          <td>'.$row["motif"].'</td>
                          <td>'.$row["date_absence"].'</td>';

                          $n = $row["nom"];
                          $quu = "SELECT * FROM users WHERE nom = '$n' ";
                          $ress = mysqli_query($conn,$quu);
                          $resChee = mysqli_num_rows($ress);
                          if($resChee > 0){
                            while($roww = mysqli_fetch_assoc($ress)){
                              $output1 .= '<td>'.$roww["tel"].'</td>';

                            }
                          }    

                        $output2 .= '
                        </tr>
                  
                </tbody>
              </table>
            </div>
             	
';
    

  }
 ?>
 <?php 
  echo $output . $output1 . $output2;
}



?>
