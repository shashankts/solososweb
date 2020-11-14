<?php 
$db_servername = "localhost";
$db_username = "solos8yo_solososroot";
$db_password =  "SOLOSOScareer44";
$db_dbname = "solos8yo_solososcareer";
$conn = new mysqli($db_servername,$db_username,$db_password,$db_dbname);
if($conn->connect_error){
	die("Connection Failed: ". $conn->connect_error);
}
echo "Connected Successfully";