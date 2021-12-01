<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript"></script>
<body>
<?php
include "php/conn.php";


	
	$qu = "SELECT * FROM users WHERE formation = '" . $_POST["id"] . "'";
	$res = mysqli_query($conn,$qu);
	$resChe = mysqli_num_rows($res);
	if($resChe > 0){
		while($row = mysqli_fetch_assoc($res)){
		  echo '<option value='.$row["nom"].'>'.$row["nom"].'</option>';
		}
	}
	


?>
</body>
</html>