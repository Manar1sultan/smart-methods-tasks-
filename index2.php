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

   if(isset($output)){
   $mysql =("insert into control (fw) values ('F')");

   if ($database->query($mysql) === TRUE){
    echo "Data has been added"; }
    else {
   echo "ERROR: " . $mysql . "<br>" . $database->error; } }

   if(isset($output2)){
   $mysql =("insert into control (left1) values ('L')");
   
   if ($database->query($mysql) === TRUE){
    echo "Data has been added"; }
    else {
   echo "ERROR: " . $mysql . "<br>" . $database->error; } }

   if(isset($output3)){
   $mysql =("insert into control (stop) values ('S')");
   
   if ($database->query($mysql) === TRUE){
    echo "Data has been added"; }
    else {
   echo "ERROR: " . $mysql . "<br>" . $database->error; } }

   if(isset($output4)){
   $mysql =("insert into control (Right1) values ('R')");
   
   if ($database->query($mysql) === TRUE){
    echo "Data has been added"; }
    else {
   echo "ERROR: " . $mysql . "<br>" . $database->error; } }

   if(isset($output5)){
   $mysql =("insert into control (bw) values ('B')");

   if ($database->query($mysql) === TRUE){
    echo "Data has been added"; }
    else {
   echo "ERROR: " . $mysql . "<br>" . $database->error; } }
?>