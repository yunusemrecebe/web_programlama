<?php 

require_once '../dbconnect.php';


	$del_id = $_POST['del_id'];


$delete = $db->query("DELETE FROM contents WHERE Id = '$del_id' ");


?>
