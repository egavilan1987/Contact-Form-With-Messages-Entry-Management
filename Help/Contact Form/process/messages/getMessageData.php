<?php 

	require_once "../../classes/connection.php";
	require_once "../../classes/Messages.php";

	$obj= new Messages;
	
	echo json_encode($obj->getMessageData($_POST['id']));
 ?>
