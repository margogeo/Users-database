<?php
include 'php/insql.php';
  $usr=$_GET['usr'];
  $psw=$_GET['psw'];
  $query = "SELECT * FROM user WHERE user='$usr' AND password='$psw'";
  $result = mysqli_query($conn,$query);
  if($result == null) {
	  echo file_get_contents('head.html');
	  echo "<h3> Error! Login and/or password are wrong";
	  echo file_get_contents('logreg.html');
  }	  
  else {
	echo file_get_contents('head.html');
	echo "<script language='JavaScript'>var usr='$usr';</script>\n";
	include 'forms.php';  
  } 

  mysqli_close($conn);
?>