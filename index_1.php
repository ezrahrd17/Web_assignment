<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Coco Market's Home!!</title>  
</head>
<body>

 $conn; 

  <h4>
    Please enter your name ! :
  </h4>
<form method="GET">
  <input type="text" name="person">
  <input type=
</form>

<?php
  include_once 'include/dbh.inc.php';
  echo"Welcome to our page!! \n";
  print "We are happy that you're here! ";
  $name=$_GET['person'];
  echo $name." is now part of the family!"
 ?>   
</body>

</html>