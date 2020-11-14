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
$validator->fields(['name','Email'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('cname')->areRequired()->maxLength(50);
$validator->field('phoneNumber')->areRequired()->minLength(10);
$validator->field('Message')->maxLength(6000);


	$pp->sendEmailTo('recruit@solosos.com');
	$pp->sendEmailTo('pooja@solosos.com');
	$pp->sendEmailTo('shashank@solosos.com');

echo $pp->process($_POST);