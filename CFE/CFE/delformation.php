<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

	$id=$_GET['id'];
	echo $id;

	$qu = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2' and ORDINAL_POSITION = '$id'";
    $res = mysqli_query($conn,$qu);
    $resChe = mysqli_num_rows($res);
    if($resChe > 0){
      while($row = mysqli_fetch_assoc($res)){
      	$c = $row["COLUMN_NAME"];
	
		$sql = "ALTER TABLE formation drop column $c";
		echo $sql;
		//confirmer: si oui executer ça
		$query = $conn->prepare( $sql );
		if( !$query->execute()){
			echo " not executed";
		}
		else{
			header('location:Formation.php');
		}
	  }
	}	
?>