<?php 

require_once '../dbconnect.php';


	$del_id = $_POST['del_id'];
	echo $del_id;

$delete = $db->query("DELETE FROM users WHERE Id = '$del_id' ");


?>
