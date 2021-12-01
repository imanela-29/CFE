<?php
session_start();
    $mail = $_SESSION["email"];
  include 'php/conn.php';

  if(isset($_GET["formation"])){
  	$a = $_GET["formation"];
		echo '<option value="">Choisissez un apprenti</option>';
		$q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' AND ORDINAL_POSITION>1";
        $re = mysqli_query($conn, $q);
        $resCh = mysqli_num_rows($re);
        if($resCh > 0){
          while($roww = mysqli_fetch_array($re)){
            $column[] = $roww["COLUMN_NAME"];
          }
          $i =$a-2;
		    $qu = "SELECT * FROM users inner join formation on users.id_formation = formation.id_formation and date_inscription <> 0000-00-00 and `$column[$i]` = 'on' ORDER BY id DESC";
			$res = mysqli_query($conn,$qu);
			while($row = mysqli_fetch_assoc($res)){
				echo '
				<option value="'.$row["nom"].'">'.$row["nom"].'</option>';
			}
		}
  }
?>  	