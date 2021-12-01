<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

	$id=$_GET['id'];
	echo $id;
	$sql = "DELETE FROM formateur WHERE id = '$id'";
	echo $sql;


	$que = "SELECT * FROM formateur WHERE id = '$id'";
 	$result = mysqli_query($conn, $que);
  	while($row = mysqli_fetch_array($result)){
  	  $n = $row["img"];
		unlink("photo_apprenti/".$n);
  	}

	//confirmer: si oui executer ça
	$query = $conn->prepare( $sql );
	if( !$query->execute()){
		echo " not executed";
	}
	else{
		header('location:formateur.php');
	}
?>