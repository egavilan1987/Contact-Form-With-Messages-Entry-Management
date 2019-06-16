<?php

	require_once "../../classes/connection.php";
	require_once "../../classes/Messages.php";
  
	$obj = new Messages();
  	
	$data = array(
			$_POST['name'],
			$_POST['phone'],
			$_POST['email'],
			$_POST['subject'],
			$_POST['message']
				);
	echo $obj-> addMessage($data);
 ?>

