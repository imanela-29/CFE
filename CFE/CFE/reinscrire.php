<?php
session_start();
  $mail = $_SESSION["email"];
  include 'php/conn.php';

	$id=$_GET['id'];
    echo $id;
    $d=date("Y-m-d");
	$sql = "UPDATE users SET date_reinscription = '$d' WHERE id = '$id'";
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