<?php
include 'php/insql.php';
  $sbj=$_GET['sbj'];
  $plc=$_GET['plc'];
  $user=$_GET['usr'];
  $dt=date("Y-m-d");
  $query = "INSERT INTO remind (subject,position,user,date) VALUES('$sbj','$plc','$user','$dt')";
  mysqli_query($conn,$query);
  echo "Subject was put in place";

  mysqli_close($conn);
?>
