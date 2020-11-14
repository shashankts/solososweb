<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['fName','lName','Email'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('phoneNumber')->areRequired()->minLength(10);
$validator->field('Message')->maxLength(6000);




$pp->attachFiles(['image']);


$pp->sendEmailTo('shashank@solosos.com'); 
$pp->sendEmailTo('recruit@solosos.com');
	$pp->sendEmailTo('pooja@solosos.com');
	$pp->sendEmailTo('nachappa@solosos.com');
	$pp->sendEmailTo('arpita@solosos.com');

echo $pp->process($_POST);