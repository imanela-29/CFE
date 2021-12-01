<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

	$id=$_GET['id'];
	echo $id;
	$sql = "UPDATE charge SET situation = 'Réglé' WHERE id = '$id'";
	echo $sql;
	//confirmer: si oui executer ça
	$query = $conn->prepare( $sql );
	if( !$query->execute()){
		echo " not executed";
	}
	else{
		header('location:graphe_charge_m.php');
	}

?> 