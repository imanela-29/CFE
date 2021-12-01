<?php
session_start();
    $mail = $_SESSION["email"];
  include 'php/conn.php';


if(isset($_POST["etu"]))
{
  $output2='';

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
        while($row = mysqli_fetch_array($ress)){
          $a = $row["$c"];
          if($a == "on"){
            $output2 .= 
                    '
                      <p>'.$c.'</p>
                  ';
          }
        }
      }  
    }}

  
  ?>


<?php
  echo $output2;
}
?>