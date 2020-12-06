<?php 

require_once '../dbconnect.php';


	$del_id = $_POST['del_id'];


$delete = $db->query("DELETE FROM comments WHERE Id = '$del_id' ");


?>
