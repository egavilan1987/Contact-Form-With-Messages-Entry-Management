<?php 

	require_once "../../classes/connection.php";
	require_once "../../classes/Messages.php";

	$obj= new Messages;

	echo $obj->deleteMessage($_POST['id']);
 ?>
