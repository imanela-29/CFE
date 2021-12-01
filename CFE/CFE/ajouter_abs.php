<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

	$id = $_GET['id'];
	echo $id;

	$qu = "SELECT * FROM absence WHERE id = '$id' ";
    $res = mysqli_query($conn,$qu);
    $resChe = mysqli_num_rows($res);
    if($resChe > 0){
      while($row = mysqli_fetch_assoc($res)){

      	$row["nb_absence"] = $row["nb_absence"] + 1;


		$sql = "UPDATE absence SET nb_absence = ".$row["nb_absence"]." WHERE id = '$id'";
		echo $sql;
		//confirmer: si oui executer ça
		$query = $conn->prepare( $sql );
		if( !$query->execute()){
			echo " not executed";
		}
		else{
			header('location:abs_apprenti.php');
		}

	}
}
?>