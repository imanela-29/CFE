<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

	$id=$_GET['id'];
	echo $id;

	$sql2 = "DELETE users, formation FROM users INNER JOIN formation ON users.id_formation = formation.id_formation WHERE id = '$id'";
	echo $sql2;

	$que = "SELECT * FROM users WHERE id = '$id'";
 	$result = mysqli_query($conn, $que);
  	while($row = mysqli_fetch_array($result)){
  	  $n = $row["img"];
		unlink("photo_apprenti/".$n);
  	}

	$query2 = $conn->prepare( $sql2 );

	//confirmer: si oui executer ça
	if(!$query2->execute()){
		echo " not executed";
	}
	else{
		header('location:apprenti.php');
	}

?>