<?php
session_start();
    $mail = $_SESSION["email"];
 	include 'php/conn.php';

if(isset($_POST["etu"]))
{
	$output='';
	$query = "SELECT * FROM charge WHERE id = ".$_POST["etu"]."";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)){
		$output .= 
            '
            <form method="POST">
              <input type="text" class="form-control" value="'.$row["id"].'" name="id_modif">
				    	<div class="row">
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput1">Charge</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="'.$row["charge"].'" name="charge">
                </div>
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput2">Prénom</label>
                  <input type="number" step="any" class="form-control" id="exampleFormControlInput2" value="'.$row["prix"].'" name="prix">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput3">Date de la charge</label>
                  <input type="date" class="form-control" id="exampleFormControlInput3" value="'.$row["date_charge"].'" name="date">
                </div>
                <div class="form-group col-lg-6">
                  <label for="exampleFormControlInput4">Situation</label>
                  <select class="form-control" id="exampleFormControlInput4" value="'.$row["situation"].'" name="stuation">
                    <option value="">Choissiez</option>
                    <option value="Non réglé">Non Réglé</option>
                    <option value="Réglé">Réglé</option>
                  </select>
                </div>
              </div>

              
                              <input type="submit" name="submit_modif" class="btn btn-success" value="Enregister">
            </form>



             	
';
    




  }
  echo $output;
}



?>
