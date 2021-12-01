<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

	$id=$_GET['id'];
    echo $id;
	$sql = "UPDATE users SET date_inscription = '0000-00-00' , date_reinscription = '0000-00-00' WHERE id = '$id'";
	echo $sql;
	//confirmer: si oui executer ça
	$query = $conn->prepare( $sql );
	if( !$query->execute()){
		echo " not executed";
	}
	else{
		header('location:apprenti.php');
	}
?>