<?php

    $output = $_POST['slider1'];
	$output2 = $_POST['slider2'];
	$output3 = $_POST['slider3'];
	$output4 = $_POST['slider4'];
	$output5 = $_POST['slider5'];
	$save= $_POST['button2'];

    $database = new mysqli('localhost','root','manarsultan','motor');

  if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

  $sql=mysqli_query($database,"select * from `motors` ORDER BY ID DESC LIMIT 1 ");

  $row=mysqli_fetch_row($sql);
  
    echo " motor 1: ".$row[1]."  <br/> ". " motor 2: ".$row[2]."   <br/>". "motor 3: "
	.$row[3]."  <br/> " ." motor 4: ".$row[4]."  <br/> " ." motor 5: ".$row[5]. "  <br/> "; 
?>
