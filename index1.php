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

   if(isset($save)){

$mysql =("insert into motors (Base,Shoulder,Elbow,Wrist,Gripper) values ('$output','$output2','$output3','$output4','$output5')");

if ($database->query($mysql) === TRUE){
    echo "Data has been added"; }
    else {
    echo "ERROR: " . $mysql . "<br>" . $database->error; } }
?>

