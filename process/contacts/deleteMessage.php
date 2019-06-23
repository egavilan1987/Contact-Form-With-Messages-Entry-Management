<?php
require_once "../../classes/connection.php";
require_once "../../classes/Contacts.php";
$obj = new Contacts();
echo $obj->deleteMessage($_POST['contact_id']);
?>
