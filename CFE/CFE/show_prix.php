<?php
session_start();
    $mail = $_SESSION["email"];
 	include 'php/conn.php';

if(isset($_POST["etu"]))
{
	$output='';
	$query = "SELECT * FROM users WHERE id = ".$_POST["etu"]."";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
		$output .= 
            '
                  <input type="number" class="form-control" id="exampleFormControlInput10" name="prix" class="prix" id="pei">
				

';

  }
  echo $output;
}



?>
