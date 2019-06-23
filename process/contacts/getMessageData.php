<?php
require_once "../../classes/connection.php";
require_once "../../classes/Contacts.php";
$obj = new Contacts();
echo json_encode($obj->getMessageData($_POST['contact_id']));
?>