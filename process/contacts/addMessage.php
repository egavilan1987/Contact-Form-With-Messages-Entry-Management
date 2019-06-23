<?php
require_once "../../classes/connection.php";
require_once "../../classes/Contacts.php";
$obj = new Contacts();

$messageData = array(
	$_POST['firstname'], 
	$_POST['lastname'], 
	$_POST['email'], 
	$_POST['phone'], 
	$_POST['subject'], 
	$_POST['message']
);

echo $obj->addMessage($messageData);

?>
