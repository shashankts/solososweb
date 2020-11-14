<?php 
$db_servername = "localhost";
$db_username = "root";
$db_password =  "root";
$db_dbname = "carrers";
$conn = new mysqli($db_servername,$db_username,$db_password,$db_dbname);
if($conn->connect_error){
	die("Connection Failed: ". $conn->connect_error);
}
echo "Connected Successfully";