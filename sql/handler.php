<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';
require_once './upload.php';
include 'dbconfig.php';

use FormGuide\Handlx\FormHandler;

$pp = new FormHandler(); 
$errors = array();
$target = "resumes/";
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$file_size = $_FILES['resume']['size'];
$file_tmp = $_FILES['resume']['tmp_name'];
$file_ext = strtolower(end(explode('.',$_FILES['resume']['name'])));
$resume = $_POST['resume'];
$position = $_POST['position'];
$message = $_POST['Message'];
$email = $_POST['Email'];
$phoneNumber = $_POST['phoneNumber'];
$resumeName = $fName.$lName.$position;
$target = $target.basename($resumeName);
$extensions = array('doc','docx','pdf','html','txt');


if(in_array($file_ext,$extensions)===false){
	$errors[] = "extension not allowed, please choose a doc, docx , pdf , html or txt file";
}
if($file_size > 2097152){
	$errors[] = 'Files size must be less than 2 MB';
}
if(empty($errors)==true){
	move_uploaded_file($file_tmp,$target)
}

try{
$insert = $conn->prepare("INSERT INTO career
 (first_name,last_name,email,phone_no,comments,resume_name,applied_date,for_designation) 
 VALUES (?,?,?,?,?,?,NOW(),?)");

$insert->bind_param("sssssss",
$fName,$lName,$email,$phoneNumber,$message,$resumeName,$position);

$insert->execute();
echo 'successfully stored the data in database';
}
catch(Exception $ex){
	echo 'Message : '. $ex->getMessage();
}

$validator = $pp->getValidator();
$validator->fields(['name','Email'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('position')->areRequired();
$validator->field('phoneNumber')->areRequired()->minLength(10);
$validator->field('Message')->maxLength(6000);

$pp->attachFiles(['image']);

	// $pp->sendEmailTo('recruit@solosos.com');
	//$pp->sendEmailTo('pooja@solosos.com'); 
	$pp->sendEmailTo('shashank@solosos.com');

echo $pp->process($_POST);