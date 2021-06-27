<?php

    $output = $_POST['button1'];
	$output2 = $_POST['button2'];
	$output3 = $_POST['button3'];
	$output4 = $_POST['button4'];
	$output5 = $_POST['button5'];

    $database = new mysqli('localhost','root','manarsultan','motor');
	
	if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

  $sql=mysqli_query($database,"select * from `control` ORDER BY ID DESC LIMIT 1 ");

  $row=mysqli_fetch_row($sql);
  
    echo " ForWard: ".$row[1]."  <br/> ". " Left: ".$row[2]."   <br/>". "Right: "
	.$row[3]."  <br/> " ." Stop: ".$row[4]."  <br/> " ." BackWard: ".$row[5]. "  <br/> "; 
?>