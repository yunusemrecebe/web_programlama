<?php 

require_once '../dbconnect.php';


	$edit_id = $_POST['edit_id'];
   


$update = $db->query("UPDATE contents SET Confirm = 1 WHERE Id = '$edit_id' ");


?>
