
<!DOCTYPE HTML>
<html>  
<body>

<form method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="submit">
</form>

</body>
</html>

<?php

if (isset($_POST["submit"])){
$x = $_POST["name"];
$y =  $_POST["email"];
  echo "Welcome".$x; 
  echo "Your email address is: ".$y; 
}

?>